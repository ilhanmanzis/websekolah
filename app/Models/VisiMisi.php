<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisiMisi extends Model
{
    use HasFactory;
    protected $table = 'visi_misi';
    protected $primaryKey = 'id_visi_misi';
    protected $fillable = ["visi", "misi", "image"];
    protected static function booted()
    {
        static::deleting(function ($vm) {
            if ($vm->image && Storage::disk('public')->exists($vm->image)) {
                Storage::disk('public')->delete($vm->image);
            }
        });
    }
}
