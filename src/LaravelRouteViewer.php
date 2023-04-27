<?php

namespace Ricventu\LaravelRouteViewer;

use Illuminate\Routing\RouteCollectionInterface;
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
        $ignore = config('route-viewer.ignore_routes');
        return $routes->filter(fn ($route) => ! Str::is($ignore, $route->uri));
    }
}
