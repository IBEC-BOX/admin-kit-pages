<?php

namespace AdminKit\Pages;

use AdminKit\Pages\Commands\PagesCommand;
use AdminKit\Pages\Providers\FilamentServiceProvider;
use AdminKit\Pages\Providers\RouteServiceProvider;
use AdminKit\Pages\Models\Page;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use RyanChandler\FilamentNavigation\Facades\FilamentNavigation;
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
        $this->app->register(FilamentServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }

    public function packageBooted()
    {
        FilamentNavigation::addItemType(__('filament-navigation.attributes.page'), [
            Select::make('page_id')
                ->label(__('filament-navigation.attributes.page_id'))
                ->searchable()
                ->options(function () {
                    return Page::pluck('title', 'id');
                }),

            TextInput::make('slug')
                ->required()
                ->unique(Page::class, 'slug', ignoreRecord: true),
        ]);
    }
}
