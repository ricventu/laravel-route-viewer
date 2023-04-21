<?php

namespace Ricventu\LaravelRouteViewer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRouteViewerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-route-viewer')
            ->hasConfigFile()
            ->hasRoutes('routes')
            ->hasViews();

        $this->publishes([
            $this->package->basePath("/../public/vendor/{$this->package->shortName()}") => public_path("vendor/{$this->package->shortName()}"),
        ], ["{$this->package->shortName()}-assets", 'laravel-assets']);

    }
}
