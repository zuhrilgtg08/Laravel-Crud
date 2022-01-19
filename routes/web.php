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

// Route::post('reset/{id}', [namacontroller::class, 'namamethod']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'setting'], function () {
    //change user profile
    Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile/{id}', [ProfileController::class, 'profile'])->name('profile.update');
    //change password
    Route::get('profile/password/{id}', [ProfileController::class, 'password'])->name('password');
    Route::put('profile/password/{id}', [ProfileController::class, 'changePassword'])->name('password.change');
});
