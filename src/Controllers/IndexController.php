<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

        return Inertia::render('Index', [
            'routes' => $routes,
            'filters' => $request->only(['search'])
        ]);
    }
}
