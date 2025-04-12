<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sejarah>
 */
class SejarahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_sejarah' => 1,
            'isi' => '<h3>🏫 <strong>Sejarah Singkat SMA Negeri 1 Kasui</strong></h3><p>SMA Negeri 1 Kasui berdiri sebagai wujud dari semangat masyarakat Kasui dalam mencerdaskan kehidupan bangsa. Didirikan pada tahun [tahun berdiri], sekolah ini awalnya beroperasi dengan fasilitas dan tenaga pengajar yang terbatas. Namun, dengan dukungan dari pemerintah daerah, tokoh masyarakat, serta semangat para pendidik dan siswa, SMA Negeri 1 Kasui terus berkembang menjadi salah satu sekolah unggulan di Kecamatan Kasui, Kabupaten Way Kanan.</p><p>Seiring perjalanan waktu, SMA Negeri 1 Kasui telah melahirkan banyak alumni yang berkontribusi di berbagai bidang, baik di tingkat daerah maupun nasional. Dengan visi mencetak generasi yang berkarakter, berprestasi, dan siap bersaing di era global, SMA Negeri 1 Kasui senantiasa berkomitmen meningkatkan mutu pendidikan, sarana-prasarana, serta kegiatan pengembangan diri bagi seluruh siswanya.</p><p>Hingga saat ini, SMA Negeri 1 Kasui terus bertransformasi menjadi sekolah yang tidak hanya unggul dalam akademik, tetapi juga aktif dalam kegiatan non-akademik, teknologi, dan pengembangan karakter.</p><p><br></p>',
            'image' => 'profile/sejarah/bg.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-06 12:59:30',
        ];
    }
}
