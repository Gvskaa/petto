<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Penjual;

class PenjualController extends Controller
{
    public function index(){ 
        return view ('index');
    }

    public function login(){
        return view ('login');
    }

    public function halaman_daftar_penjual(){
        $admin = auth('admin')->user();

        $daftar_penjual = $admin->penjual;

        Penjual::all();

        return view ('admin.penjual.daftar',[
            "admin" => $admin,
            "daftar_penjual" => $daftar_penjual
        ]);

    }

    public function submit_register_penjual(Request $request){

        $admin = auth('admin')->user();

        $nama_penjual = $request->nama_penjual;
        $email = $request->email;
        $password = $request->password;
        $nama_toko = $request->nama_toko;
        $status_penjual = $request->status_penjual;
        $tlp_penjual = $request->tlp_penjual;
        


        $admin->penjual()->create([
            "nama_penjual" => $nama_penjual,
            "email" => $email,
            "password" => Hash::make($password),
            "nama_toko" => $nama_toko,
            "status_penjual" => $status_penjual,
            "tlp_penjual" => $tlp_penjual,

        ]);
            return redirect()->route('admin.penjual.daftar');
    }

    public function halaman_register_penjual(){
        return view('admin.penjual.tambah');
    }
}
