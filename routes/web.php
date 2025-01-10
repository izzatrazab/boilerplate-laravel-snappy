<?php

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Routing\RouteCollectionInterface;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $temp = collect(Route::getRoutes())->filter(function ($route) {
        // Exclude routes starting with 'storage', or any other built-in routes
        return in_array('GET', $route->methods) &&
            !str_starts_with($route->uri, 'storage') &&
            !str_starts_with($route->uri, 'up') &&
            !str_starts_with($route->uri, '/');
    });

    $routes = [];

    $temp->each(function ($route) use(&$routes) {
        $routes[] = [
            'url' => url($route->uri),
            'route_name' => $route->getName() ?? '[name not set]'
        ];
    });

    return view('welcome', ['routes' => $routes]);
});

Route::get('/attachment', function () {
    $title = 'attachment';
    return SnappyPdf::loadView('pdf.example-pdf', [
        'title' => $title
    ])->inline($title . '.pdf');
})->name('lampiran');
