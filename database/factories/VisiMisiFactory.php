<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VisiMisi>
 */
class VisiMisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_visi_misi' => 1,
            'visi' => '<p>&nbsp;"Menjadi sekolah unggulan yang berkarakter, berprestasi, dan berwawasan global berlandaskan nilai-nilai keimanan dan kebangsaan."&nbsp;</p>',
            'misi' => '<ol><li><strong>Meningkatkan kualitas pembelajaran</strong> melalui pendekatan yang inovatif, kreatif, dan berbasis teknologi.</li><li><strong>Menanamkan nilai-nilai keimanan, moral, dan etika</strong> dalam kehidupan sehari-hari warga sekolah.</li><li><strong>Mendorong prestasi siswa</strong> di bidang akademik maupun non-akademik di tingkat lokal, nasional, dan internasional.</li><li><strong>Mengembangkan potensi dan bakat siswa</strong> melalui kegiatan ekstrakurikuler yang beragam dan positif.</li><li><strong>Membangun budaya disiplin, tanggung jawab, dan kepedulian sosial</strong> di lingkungan sekolah dan masyarakat.</li><li><strong>Meningkatkan profesionalisme tenaga pendidik dan kependidikan</strong> dalam rangka menunjang mutu pendidikan.</li><li><strong>Menjalin kemitraan dengan orang tua, alumni, dan masyarakat</strong> untuk menciptakan lingkungan belajar yang kondusif dan harmonis.</li></ol><p><br></p>',
            'image' => 'profile/visimisi/bg.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-06 13:07:38',
        ];
    }
}
