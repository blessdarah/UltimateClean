<?php

namespace App\Filament\Resources\UpdateResource\Pages;

use App\Filament\Resources\UpdateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpdate extends EditRecord
{
    protected static string $resource = UpdateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
