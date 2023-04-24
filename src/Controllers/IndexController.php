<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Ricventu\LaravelRouteViewer\Facades\LaravelRouteViewer;
use Ricventu\LaravelRouteViewer\Middlewares\HandleInertiaRequests;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(HandleInertiaRequests::class);
    }

    public function __invoke(Request $request)
    {
        $routes = LaravelRouteViewer::getRoutes();

        $search = $request->get('search');
        if (! empty($search)) {
            $routes = $routes->filter(fn ($route) => Str::is("*$search*", $route->uri));
        }

        return Inertia::render('Index', [
            'routes' => $routes->values(),
            'filters' => $request->only(['search']),
        ]);
    }
}
