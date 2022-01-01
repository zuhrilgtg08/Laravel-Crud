<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RuangController;
use App\Htpp\Controllers\HomeController;
use App\Htpp\Controllers\DasboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dasboard', 'DasboardController@index');

Route::get('/', function () {
    return view('welcome');
});


Route::resource('barang', BarangController::class);
Route::resource('guru', GuruController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('kelas', KelasController::class);
Route::resource('ruang', RuangController::class);
Route::resource('user', HomeController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dasboard', [App\Htpp\Controllers\DasboardController::class, 'index'])->name('dasboard');