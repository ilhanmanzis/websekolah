<?php

namespace App\Filament\Resources\PerpustakaanResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PerpustakaanResource;

class EditPerpustakaan extends EditRecord
{
    protected static string $resource = PerpustakaanResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
    public function getTitle(): string
    {
        return 'Perpustakaan';
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
