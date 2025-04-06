<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\InfoSekolah;
use App\Models\Kontak;
use App\Models\Laboratorium;
use App\Models\MataPelajaran;
use App\Models\Perpustakaan;
use App\Models\Poster;
use App\Models\Prestasi;
use App\Models\Profile;
use App\Models\Sambutan;
use App\Models\Sejarah;
use App\Models\TenagaKependidikan;
use App\Models\TenagaPendidik;
use App\Models\User;
use App\Models\VisiMisi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();

        //User::factory()->create([
        //  'name' => 'Test User',
        //'email' => 'test@example.com',
        //]);
        Berita::factory()->create();
        Ekstrakurikuler::factory()->create();
        InfoSekolah::factory()->create();
        Kontak::factory()->create();
        Laboratorium::factory()->create();
        MataPelajaran::factory()->create();
        Perpustakaan::factory()->create();
        Poster::factory()->create();
        Prestasi::factory()->create();
        Profile::factory()->create();
        Sambutan::factory()->create();
        Sejarah::factory()->create();
        TenagaKependidikan::factory()->create();
        TenagaPendidik::factory()->create();
        VisiMisi::factory()->create();
    }
}
