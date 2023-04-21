<?php

use Illuminate\Support\Facades\Route;
use Ricventu\LaravelRouteViewer\Controllers\IndexController;
use Ricventu\LaravelRouteViewer\Middlewares\HandleInertiaRequests;


Route::prefix(config('route-viewer.uri'))
    ->name(config('route-viewer.route_name'))
    ->middleware(HandleInertiaRequests::class)
    ->group(function () {

        Route::get('', IndexController::class);
    });
