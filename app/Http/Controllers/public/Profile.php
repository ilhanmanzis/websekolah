<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Profile as ModelsProfile;
use App\Models\Sambutan;
use App\Models\Sejarah;
use App\Models\TenagaKependidikan;
use App\Models\TenagaPendidik;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class Profile extends Controller
{
    public function sambutan()
    {
        $data = [
            'title'     => 'Sambutan Kepala Sekolah',
            'page'      => 'Sambutan Kepala Sekolah',
            'sambutan'  => Sambutan::find('1')
        ];
        return view('public/profile/sambutan', $data);
    }

    public function sejarah()
    {
        $data = [
            'title'     => 'Sejarah',
            'page'      => 'Sejarah',
            'sejarah'   => Sejarah::find('1'),
            'profile'   => ModelsProfile::find('1')
        ];
        return view('public/profile/sejarah', $data);
    }

    public function visimisi()
    {
        $data = [
            'title'     => 'Visi & Misi',
            'page'      => 'Visi & Misi',
            'visiMisi'  => VisiMisi::find('1')
        ];
        return view('public/profile/visimisi', $data);
    }

    public function organisasiSekolah()
    {
        $data = [
            'title'     => 'Struktur Organisasi Sekolah',
            'page'      => 'Struktur Organisasi Sekolah',
            'profile'   => ModelsProfile::find('1')
        ];
        return view('public/profile/organisasi_sekolah', $data);
    }

    public function organisasiKomite()
    {
        $data = [
            'title' => 'Struktur Organisasi Komite Sekolah',
            'page' => 'Struktur Organisasi Komite Sekolah',
            'profile'   => ModelsProfile::find('1')
        ];
        return view('public/profile/organisasi_komite', $data);
    }

    public function stafPendidik()
    {
        $data = [
            'title'     => 'Staf Tenaga Pendidik',
            'page'      => 'Staf Tenaga Pendidik',
            'pendidiks'  => TenagaPendidik::with('mataPelajaran')->get(),
            'profile'       => ModelsProfile::find('1')
        ];


        return view('public/profile/staf_pendidik', $data);
    }

    public function stafKependidikan()
    {
        $data = [
            'title'         => 'Staf Tenaga Kependidikan',
            'page'          => 'Staf Tenaga Kependidikan',
            'kependidikans'  => TenagaKependidikan::all(),
            'profile'       => ModelsProfile::find('1')
        ];
        return view('public/profile/staf_kependidikan', $data);
    }
}
