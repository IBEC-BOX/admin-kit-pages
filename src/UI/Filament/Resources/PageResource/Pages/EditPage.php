<?php

namespace AdminKit\Pages\UI\Filament\Resources\PageResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\Pages\UI\Filament\Resources\PageResource;

class EditPage extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
