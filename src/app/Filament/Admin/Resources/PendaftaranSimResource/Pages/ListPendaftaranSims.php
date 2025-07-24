<?php

namespace App\Filament\Admin\Resources\PendaftaranSimResource\Pages;

use App\Filament\Admin\Resources\PendaftaranSimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendaftaranSims extends ListRecords
{
    protected static string $resource = PendaftaranSimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
