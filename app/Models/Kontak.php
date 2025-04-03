<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontak';
    protected $primaryKey = 'id_kontak';
    protected $fillable = ["email", "alamat", "fax", "no_telpon", "wa", "facebook", "instagram", " youtube"];
}
