<?php

namespace App\Filament\Admin\Resources\PenilaianUjianSimResource\Pages;

use App\Filament\Admin\Resources\PenilaianUjianSimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenilaianUjianSims extends ListRecords
{
    protected static string $resource = PenilaianUjianSimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
