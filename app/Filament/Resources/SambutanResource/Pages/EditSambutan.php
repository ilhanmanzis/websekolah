<?php

namespace App\Filament\Resources\SambutanResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\SambutanResource;

class EditSambutan extends EditRecord
{
    protected static string $resource = SambutanResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }


    public function getTitle(): string
    {
        return 'Sambutan Kepala Sekolah';
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
