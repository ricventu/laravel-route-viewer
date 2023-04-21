<?php

namespace Ricventu\LaravelRouteViewer;

use Ricventu\LaravelRouteViewer\Commands\LaravelRouteViewerCommand;
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
            ->hasViews();
    }
}
