<?php

namespace Ricventu\LaravelRouteViewer\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Inertia\ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Ricventu\LaravelRouteViewer\LaravelRouteViewerServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn(string $modelName
            ) => 'Ricventu\\LaravelRouteViewer\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRouteViewerServiceProvider::class,
            ServiceProvider::class,
            RouteServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('app.key', 'base64:9I9WcEh/uqLtPnLS/0SkPiQgq5ARMr4zryhbD+7deJI=');
        config()->set('inertia.testing.page_paths', array_merge(
                config()->get('inertia.testing.page_paths', []),
                [realpath(__DIR__.'/../resources/js/Pages')]
            )
        );
    }
}
