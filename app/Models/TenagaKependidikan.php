<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaKependidikan extends Model
{
    use HasFactory;
    protected $table = 'tenaga_kependidikan';
    protected $primaryKey = 'id_tenaga_kependidikan';
    protected $fillable = ["nama", "status", "foto"];
}
