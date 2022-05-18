<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Web\Admin\
use App\Http\Controllers\Web\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Web\Pembeli\AuthController;
use App\Http\Controllers\Web\Penjual\AuthController as PenjualAuthController;
use App\Http\Controllers\Web\Admin\ArtikelController;
use App\Http\Controllers\Web\Admin\PembeliController;
use App\Http\Controllers\Web\Admin\PenjualController;
use App\Models\Pembeli;

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
Route::get('/admin/login',[AdminAuthController::class, "halaman_login_admin"])->name('admin.login.halaman');
Route::post('/admin/login',[AdminAuthController::class, "login"])->name('admin.login');
Route::get('/admin/registrasipenjual', [AdminAuthController::class, "halaman_register_penjual"])->name('admin.registerpenjual.halaman');
Route::post('/admin/registrasipenjual',[AdminAuthController::class, "submit_register_penjual"])->name('admin.registerpenjual.submit');


Route::middleware(['auth:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminAuthController::class, "halaman_dashboard_admin"])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminAuthController::class, "logout"])->name('admin.logout');
    Route::get('/admin/artikel', [ArtikelController::class, "index"])->name('admin.artikel.index');
    Route::get('/admin/dashboard', [AdminAuthController::class, "halaman_dashboard_admin"])->name('admin.dashboard');


    Route::get('/admin/penjual/daftar', [PenjualController::class, "halaman_daftar_penjual"])->name('admin.penjual.daftar');
    Route::get('/admin/penjual/tambah', [PenjualController::class, "halaman_register_penjual"])->name('admin.penjual.halaman');
    Route::post('/admin/penjual/tambah', [PenjualController::class, "submit_register_penjual"])->name('admin.penjual.submit');
    Route::get('/admin/penjual/{penjual}/ubah', [PenjualController::class, "form_ubah_penjual"])->name('admin.penjual.ubahpenjual');
    Route::post('/admin/penjual/{penjual}/ubah', [PenjualController::class, "ubah_penjual"])->name('admin.penjual.sumbit_ubah');
    Route::post('/admin/pembeli/{penjual}/hapus', [PenjualController::class, "hapus_penjual"])->name('admin.penjual.hapus');
    
    Route::get('/admin/pembeli/daftar', [PembeliController::class, "halaman_daftar_pembeli"])->name('admin.pembeli.daftar');
    Route::get('/admin/pembeli/tambah', [PembeliController::class, "halaman_register_pembeli"])->name('admin.pembeli.halaman');
    Route::post('/admin/pembeli/tambah', [PembeliController::class, "submit_register_pembeli"])->name('admin.pembeli.submit');
    Route::get('/admin/pembeli/{pembeli}/ubah', [PembeliController::class, "form_ubah_pembeli"])->name('admin.pembeli.ubah');
    Route::post('/admin/pembeli/{pembeli}/ubah', [PembeliController::class, "ubah_pembeli"])->name('admin.pembeli.submit_ubah');
    Route::post('/admin/pembeli/{pembeli}/hapuspembeli', [PembeliController::class, "hapus_pembeli"])->name('admin.pembeli.hapus');
});

Route::middleware(['auth:pembeli'])->group(function(){
Route::get('/pembeli/profil', [AuthController::class, "halaman_profil"])->name('pembeli.profil');
Route::get('/pembeli/logout', [AuthController::class, "logout"])->name('pembeli.logout');
});


Route::get('/pembeli/login',[AuthController::class, "halaman_login"])->name('pembeli.login.halaman');
Route::post('/pembeli/login',[AuthController::class, "login"])->name('pembeli.login');
Route::get('/pembeli/register', [AuthController::class, "halaman_register"])->name('pembeli.register.halaman');
Route::post('/pembeli/register',[AuthController::class, "submit_register"])->name('pembeli.register.submit');

Route::get('/penjual/login',[PenjualAuthController::class, "halaman_login_penjual"])->name('penjual.login.halaman');
Route::post('/penjual/login',[PenjualAuthController::class, "login"])->name('penjual.login');

Route::middleware(['auth:penjual'])->group(function(){
    Route::get('/penjual/dashboard', [PenjualAuthController::class, "halaman_dashboard_penjual"])->name('penjual.dashboard');
    Route::get('/penjual/logout', [PenjualAuthController::class, "logout"])->name('penjual.logout');
});



