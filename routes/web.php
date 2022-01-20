<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RuangController;
use App\Htpp\Controllers\HomeController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\ProfileController;
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


Route::resource('barang', BarangController::class);
Route::resource('guru', GuruController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('kelas', KelasController::class);
Route::resource('ruang', RuangController::class);
Route::resource('dasboard', DasboardController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('form', FormController::class);
Route::resource('komputer', KomputerController::class);
Route::post('user/reset/{id}', [FormController::class, 'reset']);
Route::get('/guru/delete/{id}', [GuruController::class, 'destroy']);
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy']);
Route::get('/kelas/delete/{id}', [KelasController::class, 'destroy']);
Route::get('/jadwal/delete/{id}', [JadwalController::class, 'destroy']);
Route::get('/ruang/delete/{id}', [RuangController::class, 'destroy']);
Route::get('/komputer/delete/{id}', [KomputerController::class, 'destroy']);
Route::get('/form/delete/{id}', [FormController::class, 'destroy']);
// Route::post('reset/{id}', [namacontroller::class, 'namamethod']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
