<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestasi>
 */
class PrestasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_prestasi' => 1,
            'judul' => 'Juara Lomba Cerdas Cermat',
            'image' => 'prestasi/01JR4Q24SV7RQRQ42G6Z0R6P76.jpg',
            'tanggal' => '16 Mei 2025',
            'skala' => 'Provinsi',
            'juara' => 'Juara 1',
            'anggota' => 'Ilhan',
            'isi' => '<h3>🏆 <strong>Prestasi Siswa SMA Negeri 1 Kasui</strong></h3><p>Dengan penuh rasa bangga, SMA Negeri 1 Kasui mengucapkan selamat kepada para siswa yang telah mengharumkan nama sekolah dalam ajang perlombaan.</p><p><strong>Prestasi Terbaru:</strong></p><blockquote>🎉 <em>Tim Siswa SMA Negeri 1 Kasui berhasil meraih </em><strong><em>Juara 1</em></strong><em> dalam Lomba Cerdas Cermat Tingkat Kabupaten Way Kanan yang diselenggarakan pada tanggal 28 Februari 2024. Kompetisi ini diikuti oleh puluhan sekolah dari berbagai kecamatan dan menjadi ajang pembuktian kemampuan akademik siswa kami.</em></blockquote><p>Prestasi ini menjadi bukti nyata bahwa siswa-siswi SMA Negeri 1 Kasui memiliki potensi luar biasa yang terus berkembang. Kami berharap keberhasilan ini dapat menjadi motivasi bagi seluruh warga sekolah untuk terus berprestasi dan membanggakan sekolah di tingkat yang lebih tinggi.</p><p><br></p>',
            'created_at' => '2025-04-06 11:52:07',
            'updated_at' => '2025-04-06 11:54:38',
        ];
    }
}
