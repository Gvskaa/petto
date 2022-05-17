<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penjual;
use Illuminate\Support\Facades\Hash;

class PenjualController extends Controller
{
    public function halaman_daftar_penjual(){
        $admin = auth('admin')->user();
        $daftar_penjual = Penjual::all();

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
        $alamat_penjual = $request->alamat_penjual;

        $admin->penjual()->create([
            "nama_penjual" => $nama_penjual,
            "email" => $email,
            "password" => Hash::make($password),
            "nama_toko" => $nama_toko,
            "status_penjual" => $status_penjual,
            "tlp_penjual" => $tlp_penjual,
            "alamat_penjual" => $alamat_penjual,
        ]);
            return redirect()->route('admin.penjual.daftar');
    }

    public function halaman_register_penjual(){
        return view('admin.penjual.tambah');
    }

    public function form_ubah_penjual($pengguna){
        $penjual_model = Penjual::FindOrFail($pengguna);
        return view('admin.penjual.ubah', [
            "penjual" => $penjual_model
        ]);
    }

    public function ubah_penjual($pengguna, Request $request){
        $admin = auth('admin')->user();

        $nama_penjual = $request->nama_penjual;
        $email = $request->email;
        $password = $request->password;
        $nama_toko = $request->nama_toko;
        $status_penjual = $request->status_penjual;
        $tlp_penjual = $request->tlp_penjual;
        $alamat_penjual = $request->alamat_penjual;

        $penjual_model = Penjual::FindOrFail($pengguna);

        $penjual_model->update([
            "nama_penjual" => $nama_penjual,
            "email" => $email,
            "password" => Hash::make($password),
            "nama_toko" => $nama_toko,
            "status_penjual" => $status_penjual,
            "tlp_penjual" => $tlp_penjual,
            "alamat_penjual" => $alamat_penjual,
        ]);
        $penjual_model->admin()->associate($admin);
        $penjual_model->save();
        return redirect()->route('admin.penjual.daftar');
    }

    public function hapus_penjual($penjual){
        $penjual_hapus = Penjual::Find($penjual);
        $penjual_hapus->delete();
        
        return redirect()->route('admin.penjual.daftar')->with('success', 'anjay');
    }
}
