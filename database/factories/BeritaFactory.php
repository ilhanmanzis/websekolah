<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_berita' => 1,
            'judul' => 'Kegiatan Literasi Meningkatkan Minat Baca Siswa di SMA Harapan Bangsa',
            'tanggal' => '22 April 2024',
            'isi' => '<h3>&nbsp;Kegiatan Literasi Meningkatkan Minat Baca Siswa di SMA Harapan Bangsa&nbsp;</h3><p><strong>Yogyakarta, 5 April 2025</strong> – Dalam rangka meningkatkan minat baca dan menumbuhkan budaya literasi di kalangan siswa, SMA Harapan Bangsa mengadakan kegiatan <em>Gerakan Literasi Sekolah</em> pada Jumat (4/4). Kegiatan ini berlangsung di aula sekolah dan diikuti oleh seluruh siswa dari kelas X hingga XII.</p><p><figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;FNkFipDaQAIyV9c.jpg&quot;,&quot;filesize&quot;:29395,&quot;height&quot;:411,&quot;href&quot;:&quot;http://localhost:8000/storage/f0V2245eW3fGOQ30t4GzenKlXErAU4R3JObwAcc6.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/f0V2245eW3fGOQ30t4GzenKlXErAU4R3JObwAcc6.jpg&quot;,&quot;width&quot;:720}" data-trix-content-type="image/jpeg" data-trix-attributes="{&quot;caption&quot;:&quot;gambar winda basudara&quot;,&quot;presentation&quot;:&quot;gallery&quot;}" class="attachment attachment--preview attachment--jpg"><a href="http://localhost:8000/storage/f0V2245eW3fGOQ30t4GzenKlXErAU4R3JObwAcc6.jpg"><img src="http://localhost:8000/storage/f0V2245eW3fGOQ30t4GzenKlXErAU4R3JObwAcc6.jpg" width="720" height="411"><figcaption class="attachment__caption attachment__caption--edited">gambar winda basudara</figcaption></a></figure></p><p>Acara dimulai pukul 08.00 WIB dengan pembukaan oleh Kepala Sekolah, Ibu Dwi Lestari, S.Pd. Dalam sambutannya, beliau menyampaikan pentingnya membaca sebagai bekal untuk menghadapi era informasi yang semakin pesat.</p><blockquote>“Dengan membaca, kita membuka jendela dunia. Literasi bukan hanya tentang buku, tapi tentang membentuk pola pikir kritis dan kreatif,” ujar Ibu Dwi.</blockquote><p>Kegiatan dilanjutkan dengan sesi <em>Book Talk</em>, di mana beberapa siswa memperkenalkan buku favorit mereka dan membagikan pengalaman membaca kepada teman-teman. Selain itu, disediakan pula pojok baca yang menampilkan berbagai jenis buku fiksi dan non-fiksi.</p><p>Tak hanya itu, kegiatan ini juga dimeriahkan dengan lomba resensi buku, baca puisi, dan kuis literasi. Para pemenang lomba diberikan piagam penghargaan dan buku bacaan sebagai hadiah.</p><p><figure data-trix-attachment="{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;FNkFipDaQAIyV9c.jpg&quot;,&quot;filesize&quot;:29395,&quot;height&quot;:411,&quot;href&quot;:&quot;http://localhost:8000/storage/lmjkmoeDHNVbMZsCeXpCyao2CK18pgbjh2d4FyKc.jpg&quot;,&quot;url&quot;:&quot;http://localhost:8000/storage/lmjkmoeDHNVbMZsCeXpCyao2CK18pgbjh2d4FyKc.jpg&quot;,&quot;width&quot;:720}" data-trix-content-type="image/jpeg" data-trix-attributes="{&quot;caption&quot;:&quot;gambar winda basudara&quot;,&quot;presentation&quot;:&quot;gallery&quot;}" class="attachment attachment--preview attachment--jpg"><a href="http://localhost:8000/storage/lmjkmoeDHNVbMZsCeXpCyao2CK18pgbjh2d4FyKc.jpg"><img src="http://localhost:8000/storage/lmjkmoeDHNVbMZsCeXpCyao2CK18pgbjh2d4FyKc.jpg" width="720" height="411"><figcaption class="attachment__caption attachment__caption--edited">gambar winda basudara</figcaption></a></figure></p><p>Guru Bahasa Indonesia, Bapak Rizal, S.Pd., mengungkapkan bahwa kegiatan literasi akan menjadi program rutin setiap bulan.</p><blockquote>“Kami ingin menjadikan literasi sebagai bagian dari budaya sekolah, bukan sekadar kegiatan seremonial,” ujarnya.</blockquote><p>Dengan adanya kegiatan ini, diharapkan siswa semakin mencintai dunia membaca dan mampu mengembangkan kemampuan berpikir kritis serta memperkaya wawasan.</p>',
            'image' => 'berita/01JR1ZWCRG124ES3GHH4A2W2VY.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
