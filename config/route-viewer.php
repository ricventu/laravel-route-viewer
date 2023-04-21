<?php

return [

    'enabled' => (bool) env('ROUTE_VIEWER', true),

    'uri' => '/route-viewer',

    'route_name' => 'route-viewer',

    'ignore_routes' => [
        '_ignition/*',
        'sanctum/*',
        'livewire/*',
    ],
];
