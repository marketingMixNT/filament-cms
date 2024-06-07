<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantagesResource\Pages;
use App\Filament\Resources\AdvantagesResource\RelationManagers;
use App\Models\Advantages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

use Filament\Resources\Concerns\Translatable;


class AdvantagesResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Advantages::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    protected static ?string $navigationGroup = 'Treści';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Tytuł'),
                FileUpload::make('image')->label('Obraz'),
                Textarea::make('description')->autosize()->label('Opis'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                ImageColumn::make('image'),
                // TextColumn::make('description')
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
            ])  ->defaultSort('sort');
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
            'index' => Pages\ListAdvantages::route('/'),
            'create' => Pages\CreateAdvantages::route('/create'),
            'edit' => Pages\EditAdvantages::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Zalety');
    }
    public static function getPluralLabel(): string
    {
        return __('Zalety');
    }

    public static function getLabel(): string
    {
        return __('Zaleta');
    }
}
