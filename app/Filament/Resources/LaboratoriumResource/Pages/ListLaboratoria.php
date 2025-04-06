<?php

namespace App\Filament\Resources\LaboratoriumResource\Pages;

use App\Filament\Resources\LaboratoriumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaboratoria extends ListRecords
{
    protected static string $resource = LaboratoriumResource::class;
    public function mount(): void
    {
        parent::mount();

        // Redirect langsung ke edit id 1
        $this->redirect(LaboratoriumResource::getUrl('edit', ['record' => 1]));
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
