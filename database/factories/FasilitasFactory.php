<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fasilitas>
 */
class FasilitasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_fasilitas' => 1,
            'isi' => '<h3>📚 <strong>Perpustakaan SMA Negeri 1 Kasui</strong></h3><p>Perpustakaan SMA Negeri 1 Kasui merupakan pusat literasi dan sumber belajar bagi seluruh warga sekolah. Dengan koleksi buku yang beragam — mulai dari buku pelajaran, referensi ilmiah, karya sastra, hingga buku pengembangan diri — perpustakaan kami hadir untuk mendukung proses belajar mengajar yang menyenangkan dan bermakna.</p><p>Selain koleksi fisik, perpustakaan kami juga mulai mengembangkan akses digital untuk memudahkan siswa dalam mencari informasi dan referensi kapan saja. Suasana yang nyaman dan tenang menjadikan perpustakaan tempat ideal untuk membaca, belajar mandiri, maupun berdiskusi.</p><p>Kami percaya bahwa budaya membaca adalah fondasi penting dalam membentuk generasi yang cerdas, kritis, dan berwawasan luas. Oleh karena itu, SMA Negeri 1 Kasui terus mendorong seluruh siswa untuk menjadikan membaca sebagai bagian dari gaya hidup sehari-hari.</p><p><br></p>',
            'image' => 'layanan/fasilitas/bg.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-06 11:05:05',
        ];
    }
}
