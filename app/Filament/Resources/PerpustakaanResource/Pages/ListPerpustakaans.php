<?php

namespace App\Filament\Resources\PerpustakaanResource\Pages;

use App\Filament\Resources\PerpustakaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerpustakaans extends ListRecords
{
    protected static string $resource = PerpustakaanResource::class;
    public function mount(): void
    {
        parent::mount();

        // Redirect langsung ke edit id 1
        $this->redirect(PerpustakaanResource::getUrl('edit', ['record' => 1]));
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
