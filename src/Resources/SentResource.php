<?php

namespace Mediusware\FilamentEmailClient\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Mediusware\FilamentEmailClient\Models\Mailbox;
use Mediusware\FilamentEmailClient\Resources\SentResource\Pages;

class SentResource extends Resource
{
    protected static ?string $model = Mailbox::class;

    protected static ?string $modelLabel = 'Sent';

    protected static ?string $navigationIcon = 'heroicon-o-arrow-uturn-right';

    protected static ?string $navigationGroup = 'Mailbox';

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
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSents::route('/'),
            // 'create' => Pages\CreateSent::route('/create'),
            // 'edit' => Pages\EditSent::route('/{record}/edit'),
        ];
    }
}
