<?php

namespace App\Filament\Resources\AdvantagesResource\Pages;

use App\Filament\Resources\AdvantagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvantages extends ListRecords
{
    use ListRecords\Concerns\Translatable;


    protected static string $resource = AdvantagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }

    public function getTitle(): string
    {
        return __('Edytuj Zalety');
    }
}
