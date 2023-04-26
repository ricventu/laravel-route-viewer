<?php

use Ricventu\LaravelRouteViewer\LaravelRouteViewerServiceProvider;

it('Can be enabled', function () {

    config()->set('route-viewer.enabled', true);

    //reload routes
    $service = new LaravelRouteViewerServiceProvider(app());
    $service->register();
    $service->boot();

    $this->withoutVite()->get('/route-viewer')->assertOk();
});

it('Can be disabled', function () {

    config()->set('route-viewer.enabled', false);

    //reload routes
    $service = new LaravelRouteViewerServiceProvider(app());
    $service->register();
    $service->boot();

    $this->withoutVite()->get('/route-viewer')->assertNotFound();
});
