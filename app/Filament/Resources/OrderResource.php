<?php

namespace App\Filament\Resources;

use App\Enums\OrderStatus;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions;

class OrderResource extends Resource
{
    protected static string|null $model = Order::class;

    protected static string|null $label = 'Замовлення';

    protected static string|null $pluralLabel = 'Замовлення';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fio')->label('Замовник'),

                TextColumn::make('contact')->label('Контакт'),

                TextColumn::make('status')->badge(OrderStatus::class),
            ])
            ->filters([
                //
            ])
            ->actions([
                Actions\EditAction::make(),
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
            'index' => Pages\ListOrders::route('/'),
        ];
    }
}
