<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Admin;

class ArtikelController extends Controller
{
    public function index(){
        $admin = auth('admin')->user();
        $daftar_artikel = $admin->artikel;

        return view('admin.artikel.index', [
            "admin" => $admin,
            "daftar_artikel"=>$daftar_artikel
        ]);

    }

    public function halaman_tambah_artikel(){
        return view('admin.artikel.halaman_tambah_artikel ');

    }
}
