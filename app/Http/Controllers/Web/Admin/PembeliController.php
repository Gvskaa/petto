<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function halaman_daftar_pembeli(){
        $admin = auth('admin')->user();

        $daftar_pembeli = $admin->pembeli;

        Pembeli::all();

        return view ('admin.pembeli.daftar',[
            "admin" => $admin,
            "daftar_pembeli" => $daftar_pembeli
        ]);

    }

    public function submit_register_pembeli(Request $request){

        $admin = auth('admin')->user();

        $nama_pembeli = $request->nama_pembeli;
        $email = $request->email;
        $password = $request->password;
        $jk_pembeli = $request->jk_pembeli;
        $tlp_pembeli = $request->tlp_pembeli;
        $alamat_pembeli = $request->alamat_pembeli;
        

        $admin->penjual()->create([
            "nama_pembeli" => $nama_pembeli,
            "email" => $email,
            "password" => Hash::make($password),
            "jk_pembeli" => $jk_pembeli,
            "tlp_pembeli" => $tlp_pembeli,
            "alamat_pembeli" => $alamat_pembeli

        ]);
            return redirect()->route('admin.pembeli.daftar');
    }

    public function halaman_register_pembeli(){
        return view('admin.pembeli.tambah');
    }
}
