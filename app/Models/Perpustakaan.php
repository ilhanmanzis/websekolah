<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;
    protected $table = 'perpustakaan';
    protected $primaryKey = 'id_perpustakaan';
    protected $fillable = ["isi", "image"];
}
