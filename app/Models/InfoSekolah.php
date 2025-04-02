<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoSekolah extends Model
{
    protected $table = 'info_sekolah';
    protected $primaryKey = 'id_info_sekolah';
    protected $fillable = ["judul", "isi", "image"];
}
