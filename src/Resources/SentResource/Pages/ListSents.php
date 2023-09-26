<?php

namespace Mediusware\FilamentEmailClient\Resources\SentResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Mediusware\FilamentEmailClient\Resources\SentResource;

class ListSents extends ListRecords
{
    protected static string $resource = SentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
