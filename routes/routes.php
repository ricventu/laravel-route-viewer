<?php

use Illuminate\Support\Facades\Route;
use Ricventu\LaravelRouteViewer\Controllers\IndexController;
use Ricventu\LaravelRouteViewer\Middlewares\PackageEnabled;

Route::prefix(config('route-viewer.route_path'))
    ->name(config('route-viewer.route_name').'.')
    ->middleware(PackageEnabled::class)
    ->group(function () {

        Route::get('', IndexController::class)->name('index');
    });
