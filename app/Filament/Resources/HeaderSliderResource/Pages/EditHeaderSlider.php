<?php

namespace App\Filament\Resources\HeaderSliderResource\Pages;

use App\Filament\Resources\HeaderSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeaderSlider extends EditRecord
{
    protected static string $resource = HeaderSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
