<?php

declare(strict_types=1);

namespace AdminKit\Pages\Providers;

use Filament\PluginServiceProvider;
use AdminKit\Pages\UI\Filament\Resources\PageResource;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'pages';

    protected array $resources = [
        PageResource::class,
    ];
}
