<?php

namespace AdminKit\Pages;

use AdminKit\Pages\Commands\PagesCommand;
use AdminKit\Pages\Providers\RouteServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PagesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-pages')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin_kit_pages_table')
            ->hasCommand(PagesCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
