<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('home');
});

//siswa
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/tambah_siswa', [SiswaController::class, 'index_tambah'])->name('tambah_siswa');
Route::get('/create_siswa', [SiswaController::class, 'create'])->name('create_siswa');
Route::get('/edit_siswa/{siswa:nisn}', [SiswaController::class, 'edit'])->name('edit_siswa');
Route::get('/delete_siswa/{siswa:nisn}', [SiswaController::class, 'delete'])->name('delete_siswa');
Route::post('/update_siswa', [SiswaController::class, 'update'])->name('update_siswa');

//spp
Route::get('/spp', [SppController::class, 'index'])->name('spp');
Route::get('/create_spp', [SppController::class, 'create'])->name('create_spp');
Route::get('/edit_spp/{spp:id_spp}', [SppController::class, 'edit'])->name('edit_spp');
Route::get('/delete_spp/{spp:id_spp}', [SppController::class, 'delete'])->name('delete_spp');
Route::post('/update_spp', [SppController::class, 'update'])->name('update_spp');

//kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/create_kelas', [KelasController::class, 'create'])->name('create_kelas');
Route::get('/edit_kelas/{kelas:id_kelas}', [KelasController::class, 'edit'])->name('edit_kelas');
Route::get('/delete_kelas/{kelas:id_kelas}', [KelasController::class, 'delete'])->name('delete_kelas');
Route::post('/update_kelas', [KelasController::class, 'update'])->name('update_kelas');

//pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::get('/tambah_pembayaran/{siswa:nisn}', [PembayaranController::class, 'tambah_pembayaran'])->name('tambah_pembayaran');
Route::get('/create_pembayaran/{siswa:nisn}', [PembayaranController::class, 'create'])->name('create_pembayaran');
Route::get('/edit_pembayaran/{pembayaran:id_pembayaran}', [PembayaranController::class, 'edit'])->name('edit_pembayaran');
Route::get('/delete_pembayaran/{pembayaran:id_pembayaran}', [PembayaranController::class, 'delete'])->name('delete_pembayaran');
Route::post('/update_pembayaran', [PembayaranController::class, 'update'])->name('update_pembayaran');
