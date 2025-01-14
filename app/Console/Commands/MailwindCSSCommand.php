<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MailwindCSSCommand extends Command
{
    protected $signature = 'refresh:mailwind';
    protected $description = 'Generate corresponding CSS file';

    # add view file here to generate its css style (tips: copy the relative path of the file and past it here, note: remove the '.blade.php' at the end)
    protected array $resources = [
        'resources/views/pdf/example-pdf'
    ];

    public function handle()
    {
        $this->components->info('Refreshing mailwind templates...');

        $commands = collect($this->resources)
            ->map(fn($resource) => "mailwind --input-html {$resource}.blade.php --output-css {$resource}-css.blade.php")
            ->join(' && ');

        shell_exec($commands);

        // Wrap the generated CSS files with <style> tags and update Blade templates
        collect($this->resources)->each(function ($resource) {
            $this->components->twoColumnDetail("$resource.blade.php", '<fg=yellow;options=bold>RUNNING</>');
            $startTime = microtime(true);

            $cssFile = "{$resource}-css.blade.php";
            $bladeFile = "{$resource}.blade.php";

            if (file_exists($cssFile)) {
                // Read the generated CSS content
                $cssContent = file_get_contents($cssFile);

                // Wrap the content with <style> tags
                $wrappedCss = "<style>\n{$cssContent}\n</style>";

                // Write the wrapped content back to the CSS file
                file_put_contents($cssFile, $wrappedCss);
            }

            if (file_exists($bladeFile)) {
                // Read the Blade template content
                $bladeContent = file_get_contents($bladeFile);

                // Format the cssFile for the @include directive
                $formattedCssFile = str_replace('resources/views/', '', $cssFile);
                $formattedCssFile = str_replace('/', '.', $formattedCssFile);
                $formattedCssFile = preg_replace('/\.blade\.php$/', '', $formattedCssFile);

                // Prepare the section and include directives
                $sectionInclude = "\n@section('css')\n    @include('{$formattedCssFile}')\n@endsection\n";

                // Check if the @include directive is present
                if (strpos($bladeContent, "@include('{$formattedCssFile}')") === false) {
                    // Find the position of @extends
                    $extendsPos = strpos($bladeContent, '@extends');

                    if ($extendsPos !== false) {
                        // Find the end of the @extends line
                        $extendsEndPos = strpos($bladeContent, "\n", $extendsPos) + 1;

                        // Insert the section and include just below the @extends line
                        $newBladeContent = substr_replace($bladeContent, $sectionInclude, $extendsEndPos, 0);

                        // Write the updated content back to the Blade file
                        file_put_contents($bladeFile, $newBladeContent);
                    } else {
                        // If @extends is not found, append the section to the end of the file
                        file_put_contents($bladeFile, $bladeContent . "\n" . $sectionInclude);
                    }
                }
            }

            $runTime = number_format((microtime(true) - $startTime) * 1000);
            $this->components->twoColumnDetail("$resource.blade.php", "<fg=gray>$runTime ms</> <fg=green;options=bold>DONE</>");
            $this->newLine();
        });

        return "CSS files have been generated, wrapped with <style> tags, and Blade templates updated.";
    }
}
