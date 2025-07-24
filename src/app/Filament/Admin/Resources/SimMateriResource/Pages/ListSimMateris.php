<?php

namespace App\Filament\Admin\Resources\SimMateriResource\Pages;

use App\Filament\Admin\Resources\SimMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSimMateris extends ListRecords
{
    protected static string $resource = SimMateriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
