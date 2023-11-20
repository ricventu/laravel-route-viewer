<?php

namespace Ricventu\LaravelRouteViewer;

use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class LaravelRouteViewer
{
    public function __construct(protected Router $router)
    {
    }

    public function getRoutes(): Collection
    {
        $routes = collect($this->router->getRoutes());
        $ignorePaths = config('route-viewer.ignore_routes_paths');
        $ignoreNames = config('route-viewer.ignore_routes_names');

        return $routes->filter(fn (Route $route) => ! Str::is($ignorePaths, $route->uri()) && ! Str::is($ignoreNames, $route->getName()));
    }
}
