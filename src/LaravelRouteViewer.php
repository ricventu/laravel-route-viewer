<?php

namespace Ricventu\LaravelRouteViewer;

use Illuminate\Routing\Router;
use Illuminate\Support\Str;

class LaravelRouteViewer
{
    public function __construct(protected Router $router)
    {
    }

    public function getRoutes()
    {
        $routes = collect($this->router->getRoutes()->getRoutes());
        $ignore = config('route-viewer.ignore_routes');
        $routes = $routes->filter(fn ($route) => ! Str::is($ignore, $route->uri));

        return $routes->values();
    }
}
