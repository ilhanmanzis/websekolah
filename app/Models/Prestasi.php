<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestasi extends Model
{
    use HasFactory;
    protected $table = 'prestasi';
    protected $primaryKey = 'id_prestasi';
    protected $fillable = ["judul", "image", "tanggal", "skala", "juara", "anggota", "isi"];
    protected static function booted()
    {
        static::deleting(function ($prestasi) {
            if ($prestasi->image && Storage::disk('public')->exists($prestasi->image)) {
                Storage::disk('public')->delete($prestasi->image);
            }
        });
    }
    public function scopeFilter(Builder $query): void
    {
        $query->where('judul', 'like', '%' . request('search') . '%');
    }
    public function scopeCari(Builder $query, string $keyword): Builder
    {
        return $query->select('id_prestasi', 'judul',  'isi', 'image', 'created_at', DB::raw("'prestasi' as sumber"))
            ->where('judul', 'like', "%$keyword%");
    }
}
