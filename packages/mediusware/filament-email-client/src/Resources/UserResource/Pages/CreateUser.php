<?php

namespace Mediusware\FilamentEmailClient\Resources\UserResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Mediusware\FilamentEmailClient\Resources\UserResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
