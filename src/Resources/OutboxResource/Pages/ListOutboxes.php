<?php

namespace Mediusware\FilamentEmailClient\Resources\OutboxResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Mediusware\FilamentEmailClient\Resources\OutboxResource;

class ListOutboxes extends ListRecords
{
    protected static string $resource = OutboxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
