<?php

namespace Mediusware\FilamentEmailClient\Resources\InboxResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Mediusware\FilamentEmailClient\Resources\InboxResource;

class EditInbox extends EditRecord
{
    protected static string $resource = InboxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
