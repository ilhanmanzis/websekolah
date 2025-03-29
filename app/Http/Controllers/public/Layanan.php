<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Layanan extends Controller
{
    public function ekstrakurikuler()
    {
        $data = [
            'title' => 'Ekstrakurikuler',
            'page' => 'Ekstrakurikuler'
        ];
        return view('public/layanan/ekstrakurikuler', $data);
    }

    public function laboratorium()
    {
        $data = [
            'title' => 'Laboratorium',
            'page' => 'Laboratorium'
        ];
        return view('public/layanan/laboratorium', $data);
    }

    public function perpustakaan()
    {
        $data = [
            'title' => 'Perpustakaan',
            'page' => 'Perpustakaan'
        ];
        return view('public/layanan/perpustakaan', $data);
    }
}
