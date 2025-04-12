<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laboratorium>
 */
class LaboratoriumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_laboratorium' => 1,
            'isi' => '<h3>🧪 <strong>Laboratorium SMA Negeri 1 Kasui</strong></h3><p>Laboratorium di SMA Negeri 1 Kasui merupakan fasilitas penting dalam mendukung kegiatan pembelajaran berbasis praktik. Kami menyediakan laboratorium yang lengkap dan memadai untuk berbagai mata pelajaran, seperti Biologi, Kimia, Fisika, dan Komputer.</p><p>Dengan sarana dan prasarana yang terus ditingkatkan, siswa dapat melakukan eksperimen dan pengamatan secara langsung untuk memperkuat pemahaman materi yang diajarkan di kelas. Selain itu, laboratorium kami dikelola oleh tenaga laboran yang profesional dan siap mendampingi siswa dalam setiap kegiatan praktikum.</p><p>Kami percaya bahwa pembelajaran tidak hanya terjadi di dalam kelas, tetapi juga melalui pengalaman langsung. Oleh karena itu, SMA Negeri 1 Kasui berkomitmen untuk menghadirkan lingkungan belajar yang aktif, aman, dan mendukung kreativitas serta rasa ingin tahu siswa.</p><p><br></p>',
            'image' => 'layanan/laboratorium/bg.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-06 11:00:35',
        ];
    }
}
