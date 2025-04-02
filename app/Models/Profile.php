<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $primaryKey = 'id_profile';
    protected $fillable = ["nama_sekolah", "motto", "image_banner", "logo", "organisasi_sekolah", "organisasi_komite"];
}
