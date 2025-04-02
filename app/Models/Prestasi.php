<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasi';
    protected $primaryKey = 'id_prestasi';
    protected $fillable = ["judul", "judul", "image", "tanggal", "skala", "juara", "anggota", "isi"];
}
