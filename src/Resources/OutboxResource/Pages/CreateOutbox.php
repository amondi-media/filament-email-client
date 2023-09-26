<?php

namespace Mediusware\FilamentEmailClient\Resources\OutboxResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Mediusware\FilamentEmailClient\Resources\OutboxResource;

class CreateOutbox extends CreateRecord
{
    protected static string $resource = OutboxResource::class;
}
