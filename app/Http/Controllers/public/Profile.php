<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Profile extends Controller
{
    public function sambutan()
    {
        $data = [
            'title' => 'Sambutan Kepala Sekolah',
            'page' => 'Sambutan Kepala Sekolah'
        ];
        return view('public/profile/sambutan', $data);
    }

    public function sejarah()
    {
        $data = [
            'title' => 'Sejarah',
            'page' => 'Sejarah'
        ];
        return view('public/profile/sejarah', $data);
    }

    public function visimisi()
    {
        $data = [
            'title' => 'Visi & Misi',
            'page' => 'Visi & Misi'
        ];
        return view('public/profile/visimisi', $data);
    }

    public function organisasiSekolah()
    {
        $data = [
            'title' => 'Struktur Organisasi Sekolah',
            'page' => 'Struktur Organisasi Sekolah'
        ];
        return view('public/profile/organisasi_sekolah', $data);
    }

    public function organisasiKomite()
    {
        $data = [
            'title' => 'Struktur Organisasi Komite Sekolah',
            'page' => 'Struktur Organisasi Komite Sekolah'
        ];
        return view('public/profile/organisasi_komite', $data);
    }

    public function stafPendidik()
    {
        $data = [
            'title' => 'Staf Tenaga Pendidik',
            'page' => 'Staf Tenaga Pendidik'
        ];
        return view('public/profile/staf_pendidik', $data);
    }

    public function stafKependidikan()
    {
        $data = [
            'title' => 'Staf Tenaga Kependidikan',
            'page' => 'Staf Tenaga Kependidikan'
        ];
        return view('public/profile/staf_kependidikan', $data);
    }
}
