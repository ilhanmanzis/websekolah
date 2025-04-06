<?php

namespace App\Filament\Resources\SejarahResource\Pages;

use App\Filament\Resources\SejarahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSejarahs extends ListRecords
{
    protected static string $resource = SejarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function mount(): void
    {
        parent::mount();

        // Redirect langsung ke edit id 1
        $this->redirect(SejarahResource::getUrl('edit', ['record' => 1]));
    }
}
