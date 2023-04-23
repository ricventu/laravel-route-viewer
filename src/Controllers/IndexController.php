<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Ricventu\LaravelRouteViewer\Facades\LaravelRouteViewer;
use Ricventu\LaravelRouteViewer\Middlewares\HandleInertiaRequests;

class IndexController extends Controller
{
    public function __construct() {
        $this->middleware(HandleInertiaRequests::class);
    }

    public function __invoke()
    {
        $routes = LaravelRouteViewer::getRoutes();
        return Inertia::render('Index', [
            'routes' => $routes,
        ]);
    }
}
