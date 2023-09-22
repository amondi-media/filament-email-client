<?php

namespace Mediusware\FilamentEmailClient\Resources;

use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Mediusware\FilamentEmailClient\Models\Mailbox;
use Mediusware\FilamentEmailClient\Resources\MailboxResource\Pages;

class MailboxResource extends Resource
{
    protected static ?string $model = Mailbox::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        // Table option defined
        return $table
            ->columns([
                TextColumn::make('subject')
                    ->weight(FontWeight::Bold)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('message')
                    ->searchable()
                    ->sortable()
                    ->limit(50),
                TextColumn::make('attachment')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                //
            ])
            ->emptyStateActions([
                //
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        // view option defined
        return $infolist
            ->schema([
                TextEntry::make('subject'),
                TextEntry::make('message')
                    ->html(),
            ])->columns([
                'sm' => 1,
                'xl' => 1,
                '2xl' => 1,
            ]);
    }

    public static function getPages(): array
    {
        // page are enabled
        return [
            'index' => Pages\ManageMailboxes::route('/'),
        ];
    }
}
