<?php

use Illuminate\Support\Facades\Route;
use Ricventu\LaravelRouteViewer\Controllers\IndexController;
use Ricventu\LaravelRouteViewer\Middlewares\HandleInertiaRequests;


Route::prefix(config('routes-viewer.uri'))
    ->name(config('routes-viewer.route_name'))
    ->middleware(HandleInertiaRequests::class)
    ->group(function () {

    Route::get('', IndexController::class);
});
