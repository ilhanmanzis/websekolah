<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\InfoSekolah;
use App\Models\Kontak;
use App\Models\Poster;
use App\Models\Prestasi;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'page'               => 'Home',
            'title'              => 'SMA N 1 KASUI',
            'posters'            => Poster::latest()->get(),
            'infos'              => InfoSekolah::latest()->take(4)->get(),
            'sambutan'           => Sambutan::find('1'),
            'beritas'            => Berita::latest()->take(4)->get(),
            'prestasis'          => Prestasi::latest()->take(4)->get(),
            'ekstrakurikulers'   => Ekstrakurikuler::all(),
            'kontak'             => Kontak::find('1')
        ];
        return view('public/home', $data);
    }
}
