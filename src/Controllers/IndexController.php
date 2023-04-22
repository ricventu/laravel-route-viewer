<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Routing\Router;
use Inertia\Inertia;
use Ricventu\LaravelRouteViewer\Middlewares\HandleInertiaRequests;

class IndexController extends Controller
{
    public function __construct(protected Router $router)
    {
        $this->middleware(HandleInertiaRequests::class);
    }

    public function __invoke()
    {
        return Inertia::render('Index', [
            'routes' => $this->router->getRoutes()->getRoutes(),
        ]);
    }
}
