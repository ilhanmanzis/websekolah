<?php

namespace App\Filament\Resources\KontakResource\Pages;

use App\Filament\Resources\KontakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKontaks extends ListRecords
{
    protected static string $resource = KontakResource::class;
    public function mount(): void
    {
        parent::mount();

        // Redirect langsung ke edit id 1
        $this->redirect(KontakResource::getUrl('edit', ['record' => 1]));
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
