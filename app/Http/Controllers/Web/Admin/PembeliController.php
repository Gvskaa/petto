<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembeli;
use Illuminate\Support\Facades\Hash;

class PembeliController extends Controller
{
    public function halaman_daftar_pembeli(){
        $admin = auth('admin')->user();

       // $daftar_pembeli = $admin->pembeli;

        $daftar_pembeli = Pembeli::all();

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
        
        $admin->pembeli()->create([
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

    public function form_ubah_pembeli($pembeli){
        $pembeli_model = Pembeli::FindOrFail($pembeli);
        return view('admin.pembeli.ubah', [
            "pembeli" => $pembeli_model
        ]);
    }

    public function ubah_pembeli($pembeli, Request $request){
        $admin = auth('admin')->user();

        $nama_pembeli = $request->nama_pembeli;
        $email = $request->email;
        $password = $request->password;
        $jk_pembeli = $request->jk_pembeli;
        $tlp_pembeli = $request->tlp_pembeli;
        $alamat_pembeli = $request->alamat_pembeli; 

        $pembeli_model = Pembeli::FindOrFail($pembeli);

        $pembeli_model->update([
            "nama_pembeli" => $nama_pembeli,
            "email" => $email,
            "password" => Hash::make($password),
            "jk_pembeli" => $jk_pembeli,
            "tlp_pembeli" => $tlp_pembeli,
            "alamat_pembeli" => $alamat_pembeli

        ]);
            $pembeli_model->admin()->associate($admin);
            $pembeli_model->save();
            return redirect()->route('admin.pembeli.daftar');
    }

    public function hapus_pembeli($pembeli){
        $pembeli_hapus = Pembeli::FindOrFail($pembeli);
        $pembeli_hapus->delete();

        return redirect()->route('admin.pembeli.daftar')->with('success', 'anjay');

    }

}
