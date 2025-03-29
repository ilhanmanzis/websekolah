<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoSekolah extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Info Sekolah',
            'page' => 'Info Sekolah'
        ];
        return view('public/berita/info', $data);
    }
    public function show(string $id)
    {
        $data = [
            'title' => 'Info Sekolah',
            'page' => 'Info Sekolah',
            'url' => 'info'
        ];
        return view('public/berita/info-show', $data);
    }
}
