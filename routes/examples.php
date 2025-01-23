<?php

use Barryvdh\Snappy\Facades\SnappyPdf;

Route::get('/attachment', function () {
    $title = 'attachment';
    return SnappyPdf::loadView('pdf.example-pdf', [
        'title' => $title
    ])->inline($title . '.pdf');
})->name('lampiran');
