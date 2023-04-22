<?php

use Inertia\Testing\AssertableInertia as Assert;

it('index2', function () {
    /** @var \Illuminate\Routing\Router $router */
    $router = resolve(\Illuminate\Routing\Router::class);
//    dd($router->getRoutes());

    $this->get(route(name: 'route-viewer.index', absolute: false))
        ->assertInertia(fn(Assert $page) => $page
            ->component('Index')
            ->has('routes', fn(Assert $page) => $page
                ->dump()
            )
        );
});
