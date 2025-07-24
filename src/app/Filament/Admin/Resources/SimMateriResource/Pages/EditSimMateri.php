<?php

namespace App\Filament\Admin\Resources\SimMateriResource\Pages;

use App\Filament\Admin\Resources\SimMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSimMateri extends EditRecord
{
    protected static string $resource = SimMateriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
