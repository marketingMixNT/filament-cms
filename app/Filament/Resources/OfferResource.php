<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfferResource\Pages;
use App\Filament\Resources\OfferResource\RelationManagers;
use App\Models\Offer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Resources\Concerns\Translatable;


use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class OfferResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Offer::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Nazwa'),
                FileUpload::make('thumbnail')->label('Miniaturka'),
                Textarea::make('description')->autosize()->label('Opis'),
                TextInput::make('price')->integer()->label('Cena'),
                TextInput::make('nights')->label('Ilość Nocy'),
                TextInput::make('food')->label('Wyzywienie'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                ImageColumn::make('thumbnail'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('sort');
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Oferty');
    }
    public static function getPluralLabel(): string
    {
        return __('Oferty');
    }

    public static function getLabel(): string
    {
        return __('Oferta');
    }
}
