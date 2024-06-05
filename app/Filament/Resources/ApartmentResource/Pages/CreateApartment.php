<?php

namespace App\Filament\Resources\ApartmentResource\Pages;

use App\Filament\Resources\ApartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateApartment extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
    protected static string $resource = ApartmentResource::class;

    public function getTitle(): string
    {
        return __('Dodaj Apartament');
    }
}
