<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kotak';
    protected $primaryKey = 'id_kontak';
    protected $fillable = ["email", "alamat", "fax", "no_telpon", "wa", "facebook", "instagram", " youtube"];
}
