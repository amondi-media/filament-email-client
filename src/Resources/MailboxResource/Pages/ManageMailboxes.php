<?php

namespace Mediusware\FilamentEmailClient\Resources\MailboxResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ManageRecords;
use Mediusware\FilamentEmailClient\Resources\MailboxResource;
use Illuminate\Support\Facades\Mail;
use Mediusware\FilamentEmailClient\Mail\SendMail;

class ManageMailboxes extends ManageRecords
{
    protected static string $resource = MailboxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
            Action::make('compose')
                ->icon('heroicon-m-pencil-square')
                ->form([
                    TextInput::make('to')
                        ->required()
                        ->email(),
                    TextInput::make('subject')
                        ->required(),
                    RichEditor::make('message')
                        ->required(),
                ])
                ->action(function (array $data) {
                    Mail::to($data['to'])
                        ->send(new SendMail(
                            new_subject: $data['subject'],
                            message: $data['message'],
                        ));
                })
        ];
    }
}
