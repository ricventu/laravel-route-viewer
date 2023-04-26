<?php

return [

    'enabled' => env('ROUTE_VIEWER_ENABLED', true),

    'route_path' => 'route-viewer',

    'route_name' => 'route-viewer',

    'middleware' => [
        'web',
        \Ricventu\LaravelRouteViewer\Middlewares\RouteViewerEnabled::class,
    ],

    'ignore_routes' => [
        'route-viewer*',
        '_ignition/*',
        'sanctum/*',
        'livewire/*',
    ],
];
