<?php

use Ricventu\LaravelRouteViewer\LaravelRouteViewerServiceProvider;

it('can configure routes', function () {
    expect(route('route-viewer.index'))->toContain('route-viewer');

    config()->set('route-viewer.route_path', 'new-path');
    config()->set('route-viewer.route_name', 'new-name');

    $router = new LaravelRouteViewerServiceProvider(app());
    $router->register();
    $router->boot();

    expect(route('new-name.index'))->toContain('new-path');
});
