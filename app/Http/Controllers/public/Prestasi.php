<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Prestasi as ModelsPrestasi;
use Illuminate\Http\Request;

class Prestasi extends Controller
{
    public function index()
    {
        $data = [
            'title'         => 'Prestasi',
            'page'          => 'Prestasi',
            'prestasis'     => ModelsPrestasi::filter()->latest()->paginate(10)->withQueryString()
        ];
        return view('public/prestasi/prestasi', $data);
    }
    public function show(string $id)
    {
        $data = [
            'title'     => 'Prestasi',
            'page'      => 'Prestasi',
            'url'       => 'prestasi',
            'prestasi'  => ModelsPrestasi::find($id)
        ];
        return view('public/prestasi/prestasi-show', $data);
    }
}
