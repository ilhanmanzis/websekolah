<?php

namespace App\Filament\Resources\SambutanResource\Pages;

use App\Filament\Resources\SambutanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSambutans extends ListRecords
{
    protected static string $resource = SambutanResource::class;
    public function mount(): void
    {
        parent::mount();

        // Redirect langsung ke edit id 1
        $this->redirect(SambutanResource::getUrl('edit', ['record' => 1]));
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
