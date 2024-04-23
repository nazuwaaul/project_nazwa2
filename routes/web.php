<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $nama = "Nazwa Aulia";
    $jenis_kelamin = "Perempuan";
    $pendidikan_terakhir = "SMP";
    $pekerjaan = "Pelajar SMK";
    $alamat = "RI";

    return view('data_diri', compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan','alamat'));
});

Route::get('/jj', function () {

    $segitiga = "1/2 x a x t";
    $lingkaran = "phi x r x r";
    $persegi = "s x s";
    $persegi_panjang = "p x l";

    return view('rumus', compact('segitiga','lingkaran','persegi','persegi_panjang'));
});
