<?php

$wkhtmltopdf = [
    'mac-os'    => base_path('resources/wkhtmltopdf/wkhtmltopdf'),
    'win-64'    => base_path('vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltopdf'),
    'win-32'    => base_path('vendor/wemersonjanuario/wkhtmltopdf-windows/bin/32bit/wkhtmltopdf'),
    'amd64'     => base_path('vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64'), // (probably for linux or older mac)
];

$wkhtmltoimage = [
    'mac-os'    => base_path('resources/wkhtmltopdf/wkhtmltoimage'),
    'win-64'    => base_path('vendor/wemersonjanuario/wkhtmltopdf/bin/64bit/wkhtmltoimage'),
    'win-32'    => base_path('vendor/wemersonjanuario/wkhtmltopdf/bin/32bit/wkhtmltoimage'),
    'amd64'     => base_path('vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64') // (probably for linux or older mac)
];

/**
 * wrap with double quotes (") to ensure path still can be read even if there are spaces in it
 */
function wrapWithQuotes(string $path): string
{
    return '"' . $path . '"';
}

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |
    | Enabled:
    |
    |    Whether to load PDF / Image generation.
    |
    | Binary:
    |
    |    The file path of the wkhtmltopdf / wkhtmltoimage executable.
    |
    | Timeout:
    |
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The wkhtmltopdf command options. These are passed directly to wkhtmltopdf.
    |    See https://wkhtmltopdf.org/usage/wkhtmltopdf.txt for all options.
    |
    | Env:
    |
    |    The environment variables to set while running the wkhtmltopdf process.
    |
    */

    'pdf' => [
        'enabled' => true,
        'binary'  => wrapWithQuotes($wkhtmltopdf[env('SNAPPY_MACHINE')]), // change your path according to your machine
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true,
        ],
        'env'     => [],
    ],

    'image' => [
        'enabled' => true,
        'binary'  => wrapWithQuotes($wkhtmltoimage[env('SNAPPY_MACHINE')]), // change your path according to your machine
        'timeout' => false,
        'options' => [
            'enable-local-file-access' => true,
        ],
        'env'     => [],
    ],

];
