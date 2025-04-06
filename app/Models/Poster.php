<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poster extends Model
{
    use HasFactory;
    protected $table = 'poster';
    protected $primaryKey = 'id_poster';
    protected $fillable = ["image"];

    protected static function booted()
    {
        static::deleting(function ($poster) {
            if ($poster->image && Storage::disk('public')->exists($poster->image)) {
                Storage::disk('public')->delete($poster->image);
            }
        });
    }
}
