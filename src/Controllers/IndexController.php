<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;
use Ricventu\LaravelRouteViewer\Facades\LaravelRouteViewer;
use Ricventu\LaravelRouteViewer\Middlewares\HandleInertiaRequests;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(HandleInertiaRequests::class);
    }

    public function __invoke(Request $request): Response
    {
        $routes = LaravelRouteViewer::getRoutes();

        $search = $request->get('search');
        if (! empty($search)) {
            $routes1 = $routes->filter(fn (Route $route) => Str::is("*$search*", $route->uri));
            $routes2 = $routes->filter(fn (Route $route) => Str::is("*$search*", $route->getName()));

            $routes = $routes1->merge($routes2)->unique();
        }

        return Inertia::render('Index', [
            'routes' => $routes->values(),
            'filters' => $request->only(['search']),
        ]);
    }
}
