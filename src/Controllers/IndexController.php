<?php

namespace Ricventu\LaravelRouteViewer\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Routing\Router;

class IndexController extends Controller
{
    public function __construct(protected Router $router)
    {

    }

    public function __invoke()
    {
//        $this->router->getRoutes();
    }
}
