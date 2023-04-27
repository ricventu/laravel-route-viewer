<?php

namespace Ricventu\LaravelRouteViewer\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Ricventu\LaravelRouteViewer\LaravelRouteViewer
 *
 * @method static getRoutes(): Collection
 *
 * @mixin \Ricventu\LaravelRouteViewer\LaravelRouteViewer
 */
class LaravelRouteViewer extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ricventu\LaravelRouteViewer\LaravelRouteViewer::class;
    }
}
