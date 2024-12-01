<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('DaftarPegawai');
});

Route::view('TambahPegawai', 'TambahPegawai')->name('TambahPegawai');
Route::view('DaftarPegawai', 'DaftarPegawai')->name('DaftarPegawai');
