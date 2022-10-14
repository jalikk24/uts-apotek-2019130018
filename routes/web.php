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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

$listTesti = [
    "data" => [
        ["nama" => "Ajat", "pekerjaan" => "Dokter", "keterangan" => "Bagus"],
        ["nama" => "Ajat", "pekerjaan" => "Dokter", "keterangan" => "Bagus"],
        ["nama" => "Ajat", "pekerjaan" => "Dokter", "keterangan" => "Bagus"],
        ["nama" => "Ajat", "pekerjaan" => "Dokter", "keterangan" => "Bagus"],
    ],
];

Route::view('/testimoni', '/testimoni', ["listTesti" => $listTesti]);

Route::get('/service', function () {
    return view('service');
});
