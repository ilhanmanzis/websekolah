<?php

namespace App\Filament\Resources\InfoSekolahResource\Pages;

use App\Filament\Resources\InfoSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInfoSekolahs extends ListRecords
{
    protected static string $resource = InfoSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
