<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Biaya15Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biaya', [Biaya15Controller::class, 'index'])->name('biaya.index');

// menampilkan form edit beserta data
Route::get('/biaya/{id}/edit', [Biaya15Controller::class, 'edit'])->name('biaya.edit');
// menyimpan data hasil edit
Route::put('/biaya/{id}/update', [Biaya15Controller::class, 'update'])->name('biaya.update');

// menampilkan form tambah data
Route::get('/biaya/create', [Biaya15Controller::class, 'create'])->name('biaya.create');
// menyimpan data baru
Route::post('/biaya/store', [Biaya15Controller::class, 'store'])->name('biaya.store');

Route::get('/biaya/{id}/delete', [Biaya15Controller::class, 'delete'])->name('biaya.delete');
