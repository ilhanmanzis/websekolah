<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Kontak as ModelsKontak;
use Illuminate\Http\Request;

class Kontak extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Kontak',
            'page'      => 'Kontak',
            'kontak'    => ModelsKontak::find('1')
        ];
        return view('public/kontak', $data);
    }
}
