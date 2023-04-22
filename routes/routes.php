<?php

use Illuminate\Support\Facades\Route;
use Ricventu\LaravelRouteViewer\Controllers\IndexController;

Route::prefix(config('route-viewer.route_path'))
    ->name(config('route-viewer.route_name').'.')
    ->group(function () {

        Route::get('', IndexController::class)->name('index');
    });
