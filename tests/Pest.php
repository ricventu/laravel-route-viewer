<?php

use Illuminate\Support\Facades\Artisan;
use Ricventu\LaravelRouteViewer\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);
uses()->beforeEach(fn () => Artisan::call('vendor:publish', [
    '--tag' => 'route-viewer-assets',
]))->in('Feature');
