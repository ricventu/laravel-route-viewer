<?php

use Illuminate\Support\Facades\Route;
use Ricventu\LaravelRouteViewer\Controllers\IndexController;

Route::prefix(config('route-viewer.route_path'))
    ->name(config('route-viewer.route_name').'.')
    ->middleware(config('route-viewer.middleware'))
    ->group(function () {
        Route::get('/home', IndexController::class)->name('index');
    });
