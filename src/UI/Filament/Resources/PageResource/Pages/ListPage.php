<?php

namespace AdminKit\Pages\UI\Filament\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Pages\UI\Filament\Resources\PageResource;

class ListPage extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
