<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TenagaKependidikan extends Model
{
    use HasFactory;
    protected $table = 'tenaga_kependidikan';
    protected $primaryKey = 'id_tenaga_kependidikan';
    protected $fillable = ["nama", "status", "foto"];
    protected static function booted()
    {
        static::deleting(function ($kependidikan) {
            if ($kependidikan->image && Storage::disk('public')->exists($kependidikan->image)) {
                Storage::disk('public')->delete($kependidikan->image);
            }
        });
    }
}
