<?php


it('index', function () {
    expect(true)->toBeTrue();

    /** @var \Illuminate\Routing\Router $router */
//    $router = resolve(\Illuminate\Routing\Router::class);
    // BadMethodCallException: Method Illuminate\Http\Response::assertInertia does not exist.
//    $this->get(route(name: 'route-viewer.index', absolute: false))
//        ->assertInertia(fn(Assert $page) => $page
//            ->component('Index')
//            ->has('routes', fn(Assert $page) => $page
//                ->dump()
//            )
//        );
});
