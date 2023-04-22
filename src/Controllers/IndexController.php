<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Routing\Router;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __construct(protected Router $router)
    {

    }

    public function __invoke()
    {
        return Inertia::render('Index', [
            //            'routes' => $this->router->getRoutes(),
        ]);
    }
}
