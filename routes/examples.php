<?php

use Barryvdh\Snappy\Facades\SnappyPdf;

Route::get('/example', function () {
    $title = 'example';
    return SnappyPdf::loadView('pdf.examples.example-pdf', [
        'title' => $title
    ])
        ->inline($title . '.pdf');
})->name('example');

Route::get('/example-2', function () {
    $title = 'example-2';
    return SnappyPdf::loadView('pdf.examples.example-2', [
        'title' => $title
    ])
        ->setOptions([
            'margin-top'    => '20mm',
            'margin-right'  => '10mm',
            'margin-bottom' => '20mm',
            'margin-left'   => '10mm',
        ])
        ->inline($title . '.pdf');
})->name('example-2');

Route::get('/poster', function () {
    $title = 'poster';
    return SnappyPdf::loadView('pdf.examples.poster', [
        'title' => $title
    ])
        ->setOptions([
            'margin-top' => '0',
            'margin-right' => '0',
            'margin-bottom' => '0',
            'margin-left' => '0',
        ])
        ->inline($title . '.pdf');
})->name('poster');

