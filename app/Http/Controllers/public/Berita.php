<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Berita as ModelsBerita;
use Illuminate\Http\Request;

class Berita extends Controller
{
    public function index()
    {

        $data = [
            'title'     => 'Berita Terbaru',
            'page'      => 'Berita Terbaru',
            'beritas'   => ModelsBerita::filter()->latest()->paginate(10)->withQueryString()
        ];

        return view('public/berita/berita', $data);
    }
    public function show(string $id)
    {
        $data = [
            'title'     => 'Berita Terbaru',
            'page'      => 'Berita Terbaru',
            'url'       => 'berita',
            'berita'    => ModelsBerita::find($id)
        ];
        return view('public/berita/berita-show', $data);
    }
}
