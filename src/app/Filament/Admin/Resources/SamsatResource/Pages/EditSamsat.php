<?php

namespace App\Filament\Admin\Resources\SamsatResource\Pages;

use App\Filament\Admin\Resources\SamsatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSamsat extends EditRecord
{
    protected static string $resource = SamsatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
