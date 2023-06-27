<?php

declare(strict_types=1);

namespace AdminKit\Pages\Providers;

use AdminKit\Pages\UI\Filament\Resources\PageResource;
use Filament\PluginServiceProvider;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'pages';

    protected array $resources = [
        PageResource::class,
    ];
}
