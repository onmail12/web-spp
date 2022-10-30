<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;

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
    return view('home');
});
//edits
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/tambah_siswa', [SiswaController::class, 'indexTambah']) -> name('tambah_siswa');
Route::get('/create_siswa', [SiswaController::class, 'create']) -> name('create_siswa');

Route::get('/edit_siswa/{siswa:nisn}',[SiswaController::class, 'edit']) -> name('edit_siswa');
Route::get('/delete_siswa/{siswa:nisn}',[SiswaController::class, 'delete']) -> name('delete_siswa');
Route::post('/update_siswa', [SiswaController::class, 'update']) -> name('update_siswa');


Route::get('/spp', [SppController::class, 'index']);
Route::get('/tambah_spp', function() {return view('tambah_spp');} ) -> name('tambah_spp');
Route::get('/create_spp', [SppController::class, 'create']) -> name('create_spp');

Route::get('/edit_spp/{id_spp}',[SppController::class, 'edit']) -> name('edit_spp');
Route::get('/delete_spp/{id_spp}',[SppController::class, 'delete']) -> name('delete_spp');
Route::post('/update_spp', [SppController::class, 'update']) -> name('update_spp');

