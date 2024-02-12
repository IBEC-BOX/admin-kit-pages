<?php

namespace AdminKit\Pages;

use Filament\Panel;
use Filament\Contracts\Plugin;
use AdminKit\Pages\UI\Filament\Resources\PageResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-pages';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            PageResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
