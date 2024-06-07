<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Offer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\ImageColumn;


use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;

use App\Filament\Resources\OfferResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfferResource\RelationManagers;


class OfferResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Offer::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationGroup = 'Treści';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Tytuł')
                ->required()
                ->minLength(2)
                ->maxLength(255),

                FileUpload::make('thumbnail')->label('Miniaturka')
                ->required()
                ->maxSize(2048)
                ->optimize('webp')
                ->imageEditor()
                ->imageEditorAspectRatios([
                    null,
                    '16:9',
                    '4:3',
                    '1:1',
                ])
                ->imageEditorViewportWidth('1920')
                ->imageEditorViewportHeight('1080'),

                Textarea::make('description')->label('Krótki Opis')
                ->required()
                ->autosize(),
                
                TextInput::make('price')->label('Cena')
                ->required()
                ->integer(),

                TextInput::make('nights')->label('Min. Ilość Nocy')
                ->required()
                ->integer(),
    
                TextInput::make('food')->label('Wyżywienie')
                ->required()
                ->minLength(2)
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
            ->columns([
                TextColumn::make('sort')->label('#'),
                ImageColumn::make('thumbnail')->label('Miniaturka'),
                TextColumn::make('title')->label('Tytuł')
                ->description(fn (Offer $record): string => Str::limit($record->description, 100, '...')) // Skracanie opisu z wielokropkiem
                ->sortable()
                ->searchable(),
                
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
