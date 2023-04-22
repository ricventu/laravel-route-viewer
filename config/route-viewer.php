<?php

return [

    'enabled' => (bool) env('ROUTE_VIEWER', true),

    'route_path' => 'route-viewer',

    'route_name' => 'route-viewer',

    'ignore_routes' => [
        '_ignition/*',
        'sanctum/*',
        'livewire/*',
    ],
];
