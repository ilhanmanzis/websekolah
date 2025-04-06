<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TenagaPendidik extends Model
{
    use HasFactory;
    protected $table = 'tenaga_pendidik';
    protected $primaryKey = 'id_tenaga_pendidik';
    protected $fillable = ["id_mata_pelajaran", "nama", "foto"];

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class, "id_mata_pelajaran", "id_mata_pelajaran");
    }
    protected static function booted()
    {
        static::deleting(function ($pendidik) {
            if ($pendidik->image && Storage::disk('public')->exists($pendidik->image)) {
                Storage::disk('public')->delete($pendidik->image);
            }
        });
    }
}
