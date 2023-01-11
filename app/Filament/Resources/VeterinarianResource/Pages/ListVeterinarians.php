<?php

namespace App\Filament\Resources\VeterinarianResource\Pages;

use App\Filament\Resources\VeterinarianResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVeterinarians extends ListRecords
{
    protected static string $resource = VeterinarianResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
