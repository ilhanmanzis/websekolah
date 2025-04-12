<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InfoSekolah>
 */
class InfoSekolahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_info_sekolah' => 1,
            'judul' => 'Pengumuman Pengambilan Rapor Semester Ganjil Tahun Ajaran 2024/2025',
            'isi' => '<p>Kepada Yth.<br>Orang Tua/Wali Peserta Didik<br>SMA Negeri 1 Kasui</p><p>Dengan hormat,<br>Kami informasikan bahwa <strong>pengambilan rapor semester ganjil tahun ajaran 2024/2025</strong> akan dilaksanakan pada:</p><p>🗓 <strong>Hari, Tanggal:</strong> Sabtu, 14 Desember 2024<br>🕘 <strong>Waktu:</strong> Pukul 09.00 – 12.00 WIB<br>🏫 <strong>Tempat:</strong> Ruang kelas masing-masing</p><p>Demi kelancaran kegiatan dan untuk mendapatkan informasi perkembangan belajar peserta didik secara langsung, kami <strong>menghimbau agar pengambilan rapor dilakukan oleh orang tua/wali</strong>.</p><p>Atas perhatian dan kerja sama Bapak/Ibu, kami ucapkan terima kasih.</p><p><strong>SMA Negeri 1 Kasui</strong><br><em>Terwujudnya Generasi Berkarakter dan Berprestasi</em></p>',
            'tanggal' => '06 April 2025',
            'image' => 'info/01JR4MVSVENWCTCJ1WVHZ03F0C.jpg',
            'created_at' => '2025-04-06 11:13:42',
            'updated_at' => '2025-04-06 11:14:07',
        ];
    }
}
