<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $fillable = ["judul", "tanggal", "isi", "image"];

    protected static function booted()
    {
        static::deleting(function ($berita) {
            if ($berita->image && Storage::disk('public')->exists($berita->image)) {
                Storage::disk('public')->delete($berita->image);
            }
        });
    }

    public function scopeFilter(Builder $query): void
    {
        $query->where('judul', 'like', '%' . request('search') . '%');
    }
    public function scopeCari(Builder $query, string $keyword): Builder
    {
        return $query->select('id_berita', 'judul',  'isi', 'image', 'created_at', DB::raw("'berita' as sumber"))
            ->where('judul', 'like', "%$keyword%");
    }
}
