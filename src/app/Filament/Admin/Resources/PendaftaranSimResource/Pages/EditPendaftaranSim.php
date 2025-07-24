<?php

namespace App\Filament\Admin\Resources\PendaftaranSimResource\Pages;

use App\Filament\Admin\Resources\PendaftaranSimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendaftaranSim extends EditRecord
{
    protected static string $resource = PendaftaranSimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
