<?php

namespace Ricventu\LaravelRouteViewer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ricventu\LaravelRouteViewer\Commands\LaravelRouteViewerCommand;

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
            ->hasViews()
            ->hasMigration('create_laravel-route-viewer_table')
            ->hasCommand(LaravelRouteViewerCommand::class);
    }
}
