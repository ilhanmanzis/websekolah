<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Berita extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Berita Terbaru',
            'page' => 'Berita Terbaru'
        ];
        return view('public/berita/berita', $data);
    }
    public function show(string $id)
    {
        $data = [
            'title' => 'Berita Terbaru',
            'page' => 'Berita Terbaru',
            'url'   => 'berita'
        ];
        return view('public/berita/berita-show', $data);
    }
}
