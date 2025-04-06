<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekstrakurikuler extends Model
{
    use HasFactory;
    protected $table = 'ekstrakurikuler';
    protected $primaryKey = 'id_ekstrakurikuler';
    protected $fillable = ["nama", "logo"];

    protected static function booted()
    {
        static::deleting(function ($ekstrakurikuler) {
            if ($ekstrakurikuler->image && Storage::disk('public')->exists($ekstrakurikuler->image)) {
                Storage::disk('public')->delete($ekstrakurikuler->image);
            }
        });
    }
}
