<?php

namespace Mediusware\FilamentEmailClient\Resources\OutboxResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Mediusware\FilamentEmailClient\Resources\OutboxResource;

class EditOutbox extends EditRecord
{
    protected static string $resource = OutboxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
