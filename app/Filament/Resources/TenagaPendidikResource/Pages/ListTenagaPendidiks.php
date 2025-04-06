<?php

namespace App\Filament\Resources\TenagaPendidikResource\Pages;

use App\Filament\Resources\TenagaPendidikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTenagaPendidiks extends ListRecords
{
    protected static string $resource = TenagaPendidikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
