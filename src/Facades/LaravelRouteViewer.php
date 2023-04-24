<?php

namespace Ricventu\LaravelRouteViewer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ricventu\LaravelRouteViewer\LaravelRouteViewer
 *
 * @method static getRoutes()
 *
 * @mixin \Ricventu\LaravelRouteViewer\LaravelRouteViewer
 */
class LaravelRouteViewer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ricventu\LaravelRouteViewer\LaravelRouteViewer::class;
    }
}
