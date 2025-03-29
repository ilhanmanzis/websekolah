<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Prestasi extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Prestasi',
            'page' => 'Prestasi'
        ];
        return view('public/prestasi/prestasi', $data);
    }
    public function show(string $id)
    {
        $data = [
            'title' => 'Prestasi',
            'page' => 'Prestasi',
            'url'   => 'prestasi'
        ];
        return view('public/prestasi/prestasi-show', $data);
    }
}
