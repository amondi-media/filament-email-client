<?php

namespace Mediusware\FilamentEmailClient\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
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
        return $table
            ->columns([
                //thumbnail
                ImageColumn::make('thumbnail')
                    ->label('Image')
                    ->rounded(),

                //title
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->alignLeft(),

                //brand
                TextColumn::make('brand')
                    ->searchable()
                    ->sortable()
                    ->color('secondary')
                    ->alignLeft(),

                //category
                TextColumn::make('category')
                    ->sortable()
                    ->searchable(),

                //description
                TextColumn::make('description')
                    ->sortable()
                    ->searchable()
                    ->limit(30),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMailboxes::route('/'),
        ];
    }
}
