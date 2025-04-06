<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfoSekolah extends Model
{
    use HasFactory;
    protected $table = 'info_sekolah';
    protected $primaryKey = 'id_info_sekolah';
    protected $fillable = ["judul", "tanggal", "isi", "image"];
    protected static function booted()
    {
        static::deleting(function ($info) {
            if ($info->image && Storage::disk('public')->exists($info->image)) {
                Storage::disk('public')->delete($info->image);
            }
        });
    }

    public function scopeFilter(Builder $query): void
    {
        $query->where('judul', 'like', '%' . request('search') . '%');
    }
    public function scopeCari(Builder $query, string $keyword): Builder
    {
        return $query->select('id_info_sekolah', 'judul', 'isi', 'image', 'created_at', DB::raw("'info_sekolah' as sumber"))
            ->where('judul', 'like', "%$keyword%");
    }
}
