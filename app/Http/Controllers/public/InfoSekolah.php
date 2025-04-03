<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\InfoSekolah as ModelsInfoSekolah;
use Illuminate\Http\Request;

class InfoSekolah extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Info Sekolah',
            'page'      => 'Info Sekolah',
            'sekolahs'  => ModelsInfoSekolah::all()
        ];
        return view('public/berita/info', $data);
    }
    public function show(string $id)
    {
        $data = [
            'title'     => 'Info Sekolah',
            'page'      => 'Info Sekolah',
            'url'       => 'info',
            'sekolah'   => ModelsInfoSekolah::find($id)
        ];
        return view('public/berita/info-show', $data);
    }
}
