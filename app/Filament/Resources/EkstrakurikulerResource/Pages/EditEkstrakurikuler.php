<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\EkstrakurikulerResource;

class EditEkstrakurikuler extends EditRecord
{
    protected static string $resource = EkstrakurikulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function ($record) {
                    if ($record->image) {
                        Storage::disk('public')->delete($record->image);
                    }
                }),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $oldImage = $this->record->image ?? null;

        // Jika gambar diubah, hapus yang lama
        if (isset($data['image']) && $data['image'] !== $oldImage) {
            if ($oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
        }

        return $data;
    }
}
