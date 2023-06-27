<?php

namespace AdminKit\Pages\UI\Filament\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use AdminKit\Pages\UI\Filament\Resources\PageResource;

class CreatePage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
