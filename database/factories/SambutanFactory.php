<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sambutan>
 */
class SambutanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_sambutan' => 1,
            'isi' => '<p><em>Assalamu’alaikum warahmatullahi wabarakatuh,</em></p><p>Salam sejahtera bagi kita semua.</p><p>Puji syukur kita panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa, atas rahmat dan karunia-Nya, sehingga SMAN 1 Kasui dapat meluncurkan <strong>website resmi sekolah</strong> sebagai bagian dari komitmen kami dalam mewujudkan transparansi informasi dan kemajuan teknologi pendidikan.</p><p>Website ini kami hadirkan sebagai sarana informasi dan komunikasi antara sekolah dengan seluruh warga sekolah, orang tua siswa, alumni, dan masyarakat luas. Di dalamnya, kami sajikan berbagai informasi terkait kegiatan sekolah, prestasi siswa, agenda pendidikan, serta layanan digital yang dapat diakses kapan saja dan di mana saja.</p><p>Kami berharap, dengan adanya website ini:</p><ul><li><strong>Warga sekolah dapat lebih mudah mengakses informasi</strong>,</li><li><strong>Orang tua dapat memantau perkembangan pendidikan anak-anaknya</strong>, dan</li><li><strong>Masyarakat dapat mengenal lebih dekat SMAN 1 Kasui sebagai lembaga pendidikan yang unggul, aktif, dan adaptif terhadap perubahan zaman.</strong></li></ul><p>Terima kasih kepada seluruh tim yang telah bekerja keras mewujudkan platform ini. Semoga website ini menjadi langkah awal menuju digitalisasi layanan pendidikan yang lebih baik.</p><p>Wassalamu’alaikum warahmatullahi wabarakatuh.<br>&nbsp;<em>Kasui, [Tanggal Peluncuran]</em><br> <strong>Kepala Sekolah SMAN 1 Kasui</strong></p>',
            'image' => 'profile/sambutan/01JR4HTSNE20CJJPJ5HT96Z3HA.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-06 10:20:43',
        ];
    }
}
