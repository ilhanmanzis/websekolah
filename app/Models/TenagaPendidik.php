<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenagaPendidik extends Model
{
    protected $table = 'tenaga_pendidik';
    protected $primaryKey = 'id_tenaga_pendidik';
    protected $fillable = ["id_mata_pelajaran", "nama", "foto"];

    public function mataPelajaran(): BelongsTo
    {
        return $this->belongsTo(MataPelajaran::class, "id_mata_pelajaran", "id_mata_pelajaran");
    }
}
