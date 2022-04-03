<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Web\Admin\
use App\Http\Controllers\Web\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Web\Pembeli\AuthController;
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
Route::get('/admin/login',[AdminAuthController::class, "halaman_login_admin"])->name('admin.login.halaman');
Route::post('/admin/login',[AdminAuthController::class, "login"])->name('admin.login');
Route::get('/admin/profil', [AdminAuthController::class, "halaman_profil_admin"])->name('admin.profil');
Route::get('/admin/logout', [AdminAuthController::class, "logout"])->name('admin.logout');

Route::get('/pembeli/profil', [AuthController::class, "halaman_profil"])->name('pembeli.profil');

Route::get('/pembeli/register', [AuthController::class, "halaman_register"])->name('pembeli.register.halaman');
Route::post('/pembeli/register',[AuthController::class, "submit_register"])->name('pembeli.register.submit');

Route::get('/pembeli/login',[AuthController::class, "halaman_login"])->name('pembeli.login.halaman');

