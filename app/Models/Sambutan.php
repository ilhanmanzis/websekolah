<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    protected $table = 'sambutan';
    protected $primaryKey = 'id_sambutan';
    protected $fillable = ["isi", "image"];
}
