<?php

namespace App\Filament\Resources;

use App\Enums\CategoryEnum;
use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Resources\Resource;

use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

use Filament\Tables;
use Filament\Tables\Table;

use Filament\Actions;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-squares-2x2';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('English')
                    ->schema([

                        Tabs::make('EnglishTabs')
                            ->tabs([

                                Tabs\Tab::make('English')
                                    ->schema([

                                        Select::make('category')
                                            ->options(CategoryEnum::class)
                                            ->required(),

                                        TextInput::make('name.en')
                                            ->label('Product Name (EN)')
                                            ->required(),

                                        Repeater::make('options.en')
                                            ->label('Options (EN)')
                                            ->schema([

                                                TextInput::make('name')
                                                    ->label('Option Name (EN)'),

                                                TextInput::make('parameter')
                                                    ->label('Option Parameter (EN)'),

                                            ])
                                            ->columns(2),

                                        CodeEditor::make('tds_content.en')
                                            ->label('TDS Content (EN)')
                                            ->language(Language::Html)
                                            ->columnSpanFull(),

                                        CodeEditor::make('tehcarta_content.en')
                                            ->label('Tech Card Content (EN)')
                                            ->language(Language::Html)
                                            ->columnSpanFull(),

                                    ]),

                            ]),

                    ]),

                /*
                |--------------------------------------------------------------------------
                | Ukrainian
                |--------------------------------------------------------------------------
                */

                Section::make('Українська')
                    ->schema([

                        Tabs::make('UkrainianTabs')
                            ->tabs([

                                Tabs\Tab::make('Українська')
                                    ->schema([

                                        Select::make('category')
                                            ->options(CategoryEnum::class)
                                            ->required(),

                                        TextInput::make('name.uk')
                                            ->label('Назва товару (UA)')
                                            ->required(),

                                        Repeater::make('options.uk')
                                            ->label('Опції (UA)')
                                            ->schema([

                                                TextInput::make('name')
                                                    ->label('Назва опції (UA)'),

                                                TextInput::make('parameter')
                                                    ->label('Параметр опції (UA)'),

                                            ])
                                            ->columns(2),

                                        CodeEditor::make('tds_content.uk')
                                            ->label('TDS Content (UA)')
                                            ->language(Language::Html)
                                            ->columnSpanFull(),

                                        CodeEditor::make('tehcarta_content.uk')
                                            ->label('Tech Card Content (UA)')
                                            ->language(Language::Html)
                                            ->columnSpanFull(),

                                    ]),

                            ]),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name.uk')
                    ->label('Назва'),

                Tables\Columns\TextColumn::make('category')
                    ->label('Категорія'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),

            ])
            ->filters([
                //
            ])
            ->actions([

                Actions\EditAction::make(),

            ])
            ->bulkActions([

                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
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

            'index' => Pages\ListProducts::route('/'),

            'create' => Pages\CreateProduct::route('/create'),

            'edit' => Pages\EditProduct::route('/{record}/edit'),

        ];
    }
}
