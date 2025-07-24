<?php

namespace App\Filament\Admin\Resources\SamsatResource\Pages;

use App\Filament\Admin\Resources\SamsatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSamsats extends ListRecords
{
    protected static string $resource = SamsatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
