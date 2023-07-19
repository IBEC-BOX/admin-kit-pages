<?php

namespace AdminKit\Pages\UI\Filament\Resources\PageResource\Pages;

use AdminKit\Pages\UI\Filament\Resources\PageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPage extends ListRecords
{
    protected static string $resource = PageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
