<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'page' => 'Home',
            'title' => 'SMA N 1 KASUI'
        ];
        return view('public/home', $data);
    }
}
