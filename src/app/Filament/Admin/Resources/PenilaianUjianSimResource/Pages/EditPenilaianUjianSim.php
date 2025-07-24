<?php

namespace App\Filament\Admin\Resources\PenilaianUjianSimResource\Pages;

use App\Filament\Admin\Resources\PenilaianUjianSimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenilaianUjianSim extends EditRecord
{
    protected static string $resource = PenilaianUjianSimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
