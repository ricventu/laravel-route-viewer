<?php

use Illuminate\Support\Facades\Route;
use Ricventu\LaravelRouteViewer\Controllers\IndexController;


Route::prefix(config('routes-viewer.uri'))
    ->name(config('routes-viewer.route_name'))
    ->group(function () {

    Route::get('', IndexController::class);
});
