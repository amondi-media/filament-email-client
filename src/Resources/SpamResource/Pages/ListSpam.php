<?php

namespace Mediusware\FilamentEmailClient\Resources\SpamResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Mediusware\FilamentEmailClient\Resources\SpamResource;

class ListSpam extends ListRecords
{
    protected static string $resource = SpamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
