<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::resource('Barang',BarangController::class);
Route::get('/edit',[BarangController::class,'edit'])->name('edit');

Route::get('/greeting', function () {
    return view('Produk.detailProduk');
});
