<?php

namespace Mediusware\FilamentEmailClient\Resources\MailboxResource\Pages;

use Filament\Actions;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Pages\ManageRecords;
use Mediusware\FilamentEmailClient\Resources\MailboxResource;

class ManageMailboxes extends ManageRecords
{
    protected static string $resource = MailboxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    // public function getTabs(): array
    // {
    //     return [
    //         'Inbox' => Tab::make('Inbox')->modifyQueryUsing(function ($query) {
    //             return $query->
    //         }),
    //     ];
    // }
}
