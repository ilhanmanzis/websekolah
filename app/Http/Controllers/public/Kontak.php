<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kontak extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kontak',
            'page' => 'Kontak'
        ];
        return view('public/kontak', $data);
    }
}
