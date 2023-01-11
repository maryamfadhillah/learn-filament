<?php

namespace App\Filament\Resources\VeterinarianResource\Pages;

use App\Filament\Resources\VeterinarianResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVeterinarian extends EditRecord
{
    protected static string $resource = VeterinarianResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
