<?php

namespace AdminKit\Pages\UI\Filament\Resources\PageResource\Pages;

use AdminKit\Pages\UI\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPage extends ListRecords
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
