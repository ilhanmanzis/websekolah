<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id_profile');
            $table->string('nama_sekolah');
            $table->string('motto');
            $table->string('image_banner');
            $table->string('logo');
            $table->string('organisasi_sekolah');
            $table->string('organisasi_komite');
            $table->string('foto_pendidik');
            $table->string('foto_kependidikan');
            $table->string('ekstrakurikuler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
