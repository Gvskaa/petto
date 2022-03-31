<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Web\Admin\

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

Route::get('/pembeli/register', [AuthController::class, "halaman_register"])->name('pembeli.register.halaman');

Route::post('/pembeli/register',[AuthController::class, "submit_register"])->name('pembeli.register.submit');