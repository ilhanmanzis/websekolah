<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use App\Models\Laboratorium;
use App\Models\Perpustakaan;
use App\Models\Profile;
use Illuminate\Http\Request;

class Layanan extends Controller
{
    public function ekstrakurikuler()
    {
        $data = [
            'title'             => 'Ekstrakurikuler',
            'page'              => 'Ekstrakurikuler',
            'ekstrakurikulers'  => Ekstrakurikuler::all(),
            'profile'           => Profile::first()

        ];
        return view('public/layanan/ekstrakurikuler', $data);
    }

    public function laboratorium()
    {
        $data = [
            'title'         => 'Laboratorium',
            'page'          => 'Laboratorium',
            'laboratorium'  => Laboratorium::first()
        ];
        return view('public/layanan/laboratorium', $data);
    }

    public function perpustakaan()
    {
        $data = [
            'title'         => 'Perpustakaan',
            'page'          => 'Perpustakaan',
            'perpustakaan'  => Perpustakaan::first()
        ];
        return view('public/layanan/perpustakaan', $data);
    }
}
