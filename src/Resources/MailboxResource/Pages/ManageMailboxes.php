<?php

namespace Mediusware\FilamentEmailClient\Resources\MailboxResource\Pages;

use Filament\Resources\Pages\ManageRecords;
use Mediusware\FilamentEmailClient\Resources\MailboxResource;

class ManageMailboxes extends ManageRecords
{
    protected static string $resource = MailboxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
