<?php

namespace Mediusware\FilamentEmailClient\Resources\SpamResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Mediusware\FilamentEmailClient\Resources\SpamResource;

class EditSpam extends EditRecord
{
    protected static string $resource = SpamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
