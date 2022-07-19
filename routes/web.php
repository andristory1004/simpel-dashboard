<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SaksiController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');


Route::resource('register', RegisterController::class);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::resource('tps', TpsController::class);


Route::post('/get-kabupaten',[TpsController::class, 'getKabupaten'])->name('/get-kabupaten');
Route::post('/get-kecamatan',[TpsController::class, 'getKecamatan'])->name('/get-kecamatan');
Route::post('/get-kelurahan',[TpsController::class, 'getKelurahan'])->name('/get-kelurahan');

Route::resource('paslon', PaslonController::class);

Route::resource('operator', OperatorController::class);

Route::resource('saksi', SaksiController::class);