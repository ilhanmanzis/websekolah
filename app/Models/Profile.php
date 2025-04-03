<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $primaryKey = 'id_profile';
    protected $fillable = ["nama_sekolah", "motto", "image_banner", "logo", "organisasi_sekolah", "organisasi_komite", "foto_pendidik", "foto_kependidikan", "ekstrakurikuler"];
}
