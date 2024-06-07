<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApartmentResource\Pages;
use App\Filament\Resources\ApartmentResource\RelationManagers;
use App\Models\Apartment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

use Filament\Resources\Concerns\Translatable;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;

use Guava\FilamentIconPicker\Forms\IconPicker;



class ApartmentResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Apartment::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Treści';




    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                RichEditor::make('description'),
                FileUpload::make('thumbnail'),
                Repeater::make('amenities')
    ->schema([
        TextInput::make('amenities_name')->required(),
        IconPicker::make('amenities_icon')
            ->required(),
    ])
    ->columns(2)




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                ImageColumn::make('thumbnail')




            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListApartments::route('/'),
            'create' => Pages\CreateApartment::route('/create'),
            'edit' => Pages\EditApartment::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Apartamenty');
    }
    public static function getPluralLabel(): string
    {
        return __('Apartamenty');
    }

    public static function getLabel(): string
    {
        return __('Apartament');
    }
}
