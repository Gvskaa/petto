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
        Artikel::all();
        return view('admin.artikel.index', [
            "admin" => $admin,
            "daftar_artikel"=>$daftar_artikel
        ]);

    }

    public function halaman_tambah_artikel(){
        return view('admin.artikel.halaman_tambah_artikel ');

    }

    public function tambah_artikel(Request $request){
        $admin = auth('admin')->user();

        $judul_artikel =  $request->judul_artikel;
        $isi_artikel = $request->isi_artikel;

        $admin->artikel()->create([
            "judul_artikel" => $judul_artikel,
            "isi_artikel" => $isi_artikel
        ]);
            return redirect()->route('admin.artikel.index');
    }
}
