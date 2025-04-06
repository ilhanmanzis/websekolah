<?php

use App\Http\Controllers\public\Berita;
use App\Http\Controllers\public\Home;
use App\Http\Controllers\public\InfoSekolah;
use App\Http\Controllers\public\Kontak;
use App\Http\Controllers\public\Layanan;
use App\Http\Controllers\public\Prestasi;
use App\Http\Controllers\public\Profile;
use App\Http\Controllers\public\Search;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', [Home::class, 'index']);

//search
Route::get('/search', [Search::class, 'index']);

//profile sekolah
Route::get('/sambutan', [Profile::class, 'sambutan']);
Route::get('/sejarah', [Profile::class, 'sejarah']);
Route::get('/visimisi', [Profile::class, 'visimisi']);
Route::get('/organisasi/sekolah', [Profile::class, 'organisasiSekolah']);
Route::get('/organisasi/komite', [Profile::class, 'organisasiKomite']);
Route::get('/staf/pendidik', [Profile::class, 'stafPendidik']);
Route::get('/staf/kependidikan', [Profile::class, 'stafKependidikan']);

//berita
Route::get('/berita', [Berita::class, 'index']);
Route::get('/berita/{id}', [Berita::class, 'show']);
Route::get('/info', [InfoSekolah::class, 'index']);
Route::get('/info/{id}', [InfoSekolah::class, 'show']);

//layanan
Route::get('/ekstrakurikuler', [Layanan::class, 'ekstrakurikuler']);
Route::get('/laboratorium', [Layanan::class, 'laboratorium']);
Route::get('/perpustakaan', [Layanan::class, 'perpustakaan']);

//prestasi
Route::get('/prestasi', [Prestasi::class, 'index']);
Route::get('/prestasi/{id}', [Prestasi::class, 'show']);

//kontak
Route::get('/kontak', [Kontak::class, 'index']);
