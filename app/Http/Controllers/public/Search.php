<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\InfoSekolah;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function index()
    {
        $keyword = request('search');

        if (!empty($keyword)) {
            $berita = Berita::cari($keyword);
            $info = InfoSekolah::cari($keyword);
            $prestasi = Prestasi::cari($keyword);
        } else {
            return redirect('/');
        }

        $results = $info
            ->union($berita)
            ->union($prestasi)
            ->paginate(10)->withQueryString();
        $data = [
            'title'     => 'Search',
            'page'      => 'Search',
            'results'   => $results
        ];


        return view('public/search', $data);
    }
}
