<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscribeResource\Pages;
use App\Models\Subscribe;
use Filament\Actions;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SubscribeResource extends Resource
{
    protected static ?string $model = Subscribe::class;

    protected static ?string $label = 'Підписники';

    protected static ?string $pluralLabel = 'Підписники';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email')->label('Пошта'),
                TextColumn::make('created_at')->label('Оформлено')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubscribes::route('/'),
        ];
    }
}
