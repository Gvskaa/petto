<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Web\Penjual\AuthController as PenjualAuthController;
use App\Http\Controllers\Web\Pembeli\AuthController as PembeliAuthController;
use App\Http\Controllers\Web\Admin\PembeliController;
use App\Http\Controllers\Web\Admin\PenjualController;
use App\Http\Controllers\Web\Admin\ArtikelController;
use App\Http\Controllers\Web\Pembeli\PembeliController as PembeliPembeliController;
use App\Http\Controllers\Web\Penjual\BarangController;
use App\Http\Controllers\Web\Pembeli\BeliController;
use App\Http\Controllers\Web\Penjual\PembelianController;

use App\Models\Pembeli;


Route::get('/', function () {
    return view('index');
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

    Route::get('/admin/penjual/{penjual}/ubah', [PenjualController::class, "form_ubah_penjual"])->name('admin.penjual.ubah');
    Route::post('/admin/penjual/{penjual}/ubah', [PenjualController::class, "ubah_penjual"])->name('admin.penjual.submit_ubah');
    Route::post('/admin/penjual/{penjual}/hapus', [PenjualController::class, "hapus_penjual"])->name('admin.penjual.hapus');
    Route::get('/admin/pembeli/daftar', [PembeliController::class, "halaman_daftar_pembeli"])->name('admin.pembeli.daftar');
    Route::get('/admin/pembeli/tambah', [PembeliController::class, "halaman_register_pembeli"])->name('admin.pembeli.halaman');
    Route::post('/admin/pembeli/tambah', [PembeliController::class, "submit_register_pembeli"])->name('admin.pembeli.submit');
    Route::get('/admin/pembeli/{pembeli}/ubah', [PembeliController::class, "form_ubah_pembeli"])->name('admin.pembeli.ubah');
    Route::post('/admin/pembeli/{pembeli}/ubah', [PembeliController::class, "ubah_pembeli"])->name('admin.pembeli.submit_ubah');

    Route::post('/admin/pembeli/{pembeli}/hapus', [PembeliController::class, "hapus_pembeli"])->name('admin.pembeli.hapus');

    Route::get('/admin/artikel/daftar', [ArtikelController::class, "halaman_daftar_artikel"])->name('admin.artikel.daftar');
    Route::get('/admin/artikel/tambah', [ArtikelController::class, "halaman_register_artikel"])->name('admin.artikel.halaman');
    Route::post('/admin/artikel/tambah', [ArtikelController::class, "submit_register_artikel"])->name('admin.artikel.submit');
    Route::get('/admin/artikel/{artikel}/ubah', [ArtikelController::class, "form_ubah_artikel"])->name('admin.artikel.ubah');
    Route::post('/admin/artikel/{artikel}/ubah', [ArtikelController::class, "ubah_artikel"])->name('admin.artikel.submit_ubah');
    Route::post('/admin/artikel/{artikel}/hapus', [ArtikelController::class, "artikel_hapus"])->name('admin.artikel.hapus');
    Route::get('/admin/artikel/{artikel}/lihat', [ArtikelController::class, "lihat_artikel"])->name('admin.artikel.lihat');
});

Route::middleware(['auth:pembeli'])->group(function(){
Route::get('/pembeli/profil', [PembeliAuthController::class, "halaman_profil"])->name('pembeli.profil');
Route::get('/pembeli/logout', [PembeliAuthController::class, "logout"])->name('pembeli.logout');
Route::get('/pembeli/daftar_barang', [PembeliPembeliController::class, "daftar_barang"])->name('pembeli.barang.halaman');
// Route::get('/pembeli/{barang}/detail_barang', [BeliController::class, "detail_barang"])->name('pembeli.barang.detail');
Route::post('/pembeli/{barang}/pesan_barang', [BeliController::class, "pesan_barang"])->name('pembeli.barang.pesan');
Route::get('/pembeli/daftarpembelian', [BeliController:: class, 'daftar_pemesanan'])->name('pembeli.barang.daftarpembelian');
Route::get('/pembeli/index', [PembeliAuthController::class, "halaman_index"])->name('pembeli.index');
Route::get('/pembeli/chart', [PembeliAuthController::class, "daftar_pemesanan"])->name('pembeli.chart');
Route::get('/pembeli/{barang}/detail', [BeliController::class, "detail_barang"])->name('pembeli.barang.detail');
Route::get('/pembeli/{artikel}/lihat', [PembeliPembeliController::class, "lihat_artikel"])->name('pembeli.artikel.lihat');
Route::post('/pembeli/pemesanan/{pemesanan}/hapus',[BeliController::class, "hapus_pesanan"])->name('pembeli.pesan.hapus');
Route::post('/pembeli/{barang}/checkout', [BeliController::class, "checkout"])->name('pembeli.checkout');
Route::get('/pembeli/pemesanan/{pemesanan}/checkout', [BeliController::class, "formulir_alamat"])->name('pembeli.formulir_alamat');
Route::post('/pembeli/pemesanan/{pemesanan}/submit/checkout', [BeliController::class, "submit_formulir_pemesanan"])->name('pembeli.formulir.pemesanan');
Route::get('/pembeli/barang/shop', [BeliController::class, 'halaman_shop'])->name('pembeli.shop');
Route::get('/pembeli/profil/pembeli', [PembeliAuthController::class, 'profil_pembeli'])->name('pembeli.profilPembeli');
Route::post('/pembeli/profil/pembeli', [PembeliAuthController::class, 'ubah_profil'])->name('pembeli.ubah.profilPembeli');
Route::get('/pembeli/pemesanan', [PembeliAuthController::class, "halaman_pesanan"])->name('pembeli.pemesanan');

});


Route::get('/pembeli/login',[PembeliAuthController::class, "halaman_login"])->name('pembeli.login.halaman');
Route::post('/pembeli/login',[PembeliAuthController::class, "login"])->name('pembeli.login');
Route::get('/pembeli/register', [PembeliAuthController::class, "halaman_register"])->name('pembeli.register.halaman');
Route::post('/pembeli/register',[PembeliAuthController::class, "submit_register"])->name('pembeli.register.submit');

Route::get('/penjual/login',[PenjualAuthController::class, "halaman_login_penjual"])->name('penjual.login.halaman');
Route::post('/penjual/login',[PenjualAuthController::class, "login"])->name('penjual.login');

Route::middleware(['auth:penjual'])->group(function(){
    Route::get('/penjual/dashboard', [PenjualAuthController::class, "halaman_dashboard_penjual"])->name('penjual.dashboard');
    Route::get('/penjual/logout', [PenjualAuthController::class, "logout"])->name('penjual.logout');
    Route::get('/penjual/pembeli/daftarpemesanan', [PembelianController::class, "daftar_pemesanan"])->name('penjual.pembeli.daftarpesanan');
    Route::post('/penjual/{pembelian}/konfirmasi', [BarangController::class, "konfirmasi"])->name('penjual.konfirmasi');
    Route::get('/penjual/barang/daftar', [BarangController::class, "halaman_daftar_barang"])->name('penjual.barang.daftar');
    Route::get('/penjual/barang/tambah', [BarangController::class, "halaman_register_barang"])->name('penjual.barang.halaman');
    Route::post('/penjual/barang/tambah', [BarangController::class, "submit_register_barang"])->name('penjual.barang.submit');
    Route::get('/penjual/barang/{barang}/ubah', [BarangController::class, "form_ubah_barang"])->name('penjual.barang.ubah');
    Route::post('/penjual/barang/{barang}/ubah', [BarangController::class, "ubah_barang"])->name('penjual.barang.submit_ubah');
    Route::post('/penjual/barang/{barang}/hapus', [BarangController::class, "hapus_barang"])->name('penjual.barang.hapus');

});



