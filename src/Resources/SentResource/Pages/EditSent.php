<?php

namespace Mediusware\FilamentEmailClient\Resources\SentResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Mediusware\FilamentEmailClient\Resources\SentResource;

class EditSent extends EditRecord
{
    protected static string $resource = SentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
