<?php

use Ricventu\LaravelRouteViewer\LaravelRouteViewerServiceProvider;

it('can configure routes', function () {
    config()->set('route-viewer.route_path', 'new-path');
    config()->set('route-viewer.route_name', 'new-name');

    //reload routes
    $service = new LaravelRouteViewerServiceProvider(app());
    $service->register();
    $service->boot();

    expect(route('new-name.index'))->toContain('new-path');
});
