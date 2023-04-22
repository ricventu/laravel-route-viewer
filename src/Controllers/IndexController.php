<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Routing\Controller;
use Inertia\Inertia;
use Ricventu\LaravelRouteViewer\LaravelRouteViewer;
use Ricventu\LaravelRouteViewer\Middlewares\HandleInertiaRequests;

class IndexController extends Controller
{
    public function __construct(
        protected LaravelRouteViewer $laravelRouteViewer
    ) {
        $this->middleware(HandleInertiaRequests::class);
    }

    public function __invoke()
    {
        $routes = $this->laravelRouteViewer->getRoutes();
        return Inertia::render('Index', [
            'routes' => $routes,
        ]);
    }
}
