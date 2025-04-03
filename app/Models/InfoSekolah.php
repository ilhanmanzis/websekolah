<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoSekolah extends Model
{
    use HasFactory;
    protected $table = 'info_sekolah';
    protected $primaryKey = 'id_info_sekolah';
    protected $fillable = ["judul", "tanggal", "isi", "image"];
}
