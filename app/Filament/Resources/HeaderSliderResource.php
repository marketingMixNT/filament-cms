<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeaderSliderResource\Pages;
use App\Filament\Resources\HeaderSliderResource\RelationManagers;
use App\Models\HeaderSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;


use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class HeaderSliderResource extends Resource
{
    protected static ?string $model = HeaderSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
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
                TextInput::make('alt')
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
                ImageColumn::make('image')->label('Miniaturka'),
                


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
            ])->defaultSort('sort');;
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
            'index' => Pages\ListHeaderSliders::route('/'),
            'create' => Pages\CreateHeaderSlider::route('/create'),
            'edit' => Pages\EditHeaderSlider::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Główny Slider');
    }
    public static function getPluralLabel(): string
    {
        return __('Główny Slider');
    }

    public static function getLabel(): string
    {
        return __('Główny Slider');
    }
}
