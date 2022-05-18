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
<<<<<<< HEAD

        $daftar_penjual = Penjual::all();;
=======
        $daftar_penjual = Penjual::all();

>>>>>>> 9d9882a3798da5f925e668844a51f97bb7065c20
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

<<<<<<< HEAD
    public function form_ubah_penjual($penjual){
        $penjual_model = Penjual::FindOrFail($penjual);
        return view('admin.penjual.ubahpenjual', [
=======
    public function form_ubah_penjual($pengguna){
        $penjual_model = Penjual::FindOrFail($pengguna);
        return view('admin.penjual.ubah', [
>>>>>>> 9d9882a3798da5f925e668844a51f97bb7065c20
            "penjual" => $penjual_model
        ]);
    }

<<<<<<< HEAD
    public function ubah_penjual($penjual, Request $request)
    {
=======
    public function ubah_penjual($pengguna, Request $request){
>>>>>>> 9d9882a3798da5f925e668844a51f97bb7065c20
        $admin = auth('admin')->user();

        $nama_penjual = $request->nama_penjual;
        $email = $request->email;
        $password = $request->password;
        $nama_toko = $request->nama_toko;
        $status_penjual = $request->status_penjual;
        $tlp_penjual = $request->tlp_penjual;
<<<<<<< HEAD

        $penjual_model = Penjual::FindOrFail($penjual);
=======
        $alamat_penjual = $request->alamat_penjual;

        $penjual_model = Penjual::FindOrFail($pengguna);
>>>>>>> 9d9882a3798da5f925e668844a51f97bb7065c20

        $penjual_model->update([
            "nama_penjual" => $nama_penjual,
            "email" => $email,
            "password" => Hash::make($password),
            "nama_toko" => $nama_toko,
            "status_penjual" => $status_penjual,
            "tlp_penjual" => $tlp_penjual,
<<<<<<< HEAD

        ]);

=======
            "alamat_penjual" => $alamat_penjual,
        ]);
>>>>>>> 9d9882a3798da5f925e668844a51f97bb7065c20
        $penjual_model->admin()->associate($admin);
        $penjual_model->save();
        return redirect()->route('admin.penjual.daftar');
    }

    public function hapus_penjual($penjual){
        $penjual_hapus = Penjual::Find($penjual);
        $penjual_hapus->delete();
<<<<<<< HEAD

        return redirect()->route('admin.penjual.daftar')->with('success', 'anjay');

    }


=======
        
        return redirect()->route('admin.penjual.daftar')->with('success', 'anjay');
    }
>>>>>>> 9d9882a3798da5f925e668844a51f97bb7065c20
}
