<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ekstrakurikuler>
 */
class EkstrakurikulerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_ekstrakurikuler' => 1,
            'nama' => 'Pramuka',
            'logo' => 'layanan/ekstrakurikuler/logo.png',
            'banner' => 'layanan/ekstrakurikuler/banner/bg.jpg',
            'isi' => ' <h2>Ekstrakurikuler Pramuka SMAN 1 Kasui</h2> <p> Ekstrakurikuler Pramuka di <strong>SMAN 1 Kasui</strong> merupakan salah satu kegiatan unggulan yang bertujuan membentuk karakter siswa yang disiplin, mandiri, bertanggung jawab, serta memiliki jiwa kepemimpinan. </p><p> Melalui berbagai kegiatan menarik seperti pelatihan keterampilan kepramukaan, perkemahan, kegiatan sosial, dan lomba kepramukaan, siswa diajak untuk belajar sambil berpetualang dan bekerja sama dalam tim. </p><p> Dengan semangat <em>Dasa Dharma</em> dan <em>Tri Satya</em>, Pramuka SMAN 1 Kasui menjadi wadah pengembangan diri yang positif bagi para siswa. Tak hanya membangun fisik dan mental, kegiatan Pramuka juga menanamkan nilai-nilai kebangsaan, cinta lingkungan, serta rasa peduli terhadap sesama. </p> <p> Dipandu oleh pembina yang berpengalaman dan penuh dedikasi, Pramuka SMAN 1 Kasui siap mencetak generasi muda yang tangguh dan berakhlak mulia. </p>',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
