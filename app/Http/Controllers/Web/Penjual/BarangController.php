<?php

namespace App\Http\Controllers\Web\Penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class BarangController extends Controller
{
    public function halaman_daftar_barang(){
        $admin = auth('admin')->user();
        $daftar_barang = Barang::all();

        return view ('admin.penjual.barang.daftar',[
            "admin" => $admin,
            "daftar_barang" => $daftar_barang
        ]);
    }

    public function submit_register_barang(Request $request){
        $admin = auth('admin')->user();

        $harga_barang = $request->harga_barang;
        $foto_barang = $request->foto_barang;
        $nama_barang = $request->nama_barang;
        $keterangan = $request->keterangan;
        $stok_barang = $request->stok_barang;
        $kategori_barang = $request->kategori_barang;
        $status_barang = $request->status_barang;

        $admin->barang()->create([
            "harga_barang" => $harga_barang,
            "foto_barang" => $foto_barang,
            "nama_barang" => $nama_barang,
            "keterangan" => $keterangan,
            "stok_barang" => $stok_barang,
            "kategori_barang" => $kategori_barang,
            "status_barang" => $status_barang,
        ]);
            return redirect()->route('admin.penjual.barang.daftar');
    }

    public function halaman_register_barang(){
        return view('admin.penjual.barang.tambah');
    }

    public function form_ubah_barang($pengguna){
        $barang_model = Barang::FindOrFail($pengguna);
        return view('admin.penjual.barang.ubah', [
            "barang" => $barang_model
        ]);
    }

    public function ubah_barang($pengguna, Request $request){
        $admin = auth('admin')->user();

        $harga_barang = $request->harga_barang;
        $foto_barang = $request->foto_barang;
        $nama_barang = $request->nama_barang;
        $keterangan = $request->keterangan;
        $stok_barang = $request->stok_barang;
        $kategori_barang = $request->kategori_barang;
        $status_barang = $request->status_barang;

        $barang_model = Barang::FindOrFail($pengguna);

        $barang_model->update([
            "harga_barang" => $harga_barang,
            "foto_barang" => $foto_barang,
            "nama_barang" => $nama_barang,
            "keterangan" => $keterangan,
            "stok_barang" => $stok_barang,
            "kategori_barang" => $kategori_barang,
            "status_barang" => $status_barang,
        ]);
        $barang_model->admin()->associate($admin);
        $barang_model->save();
        return redirect()->route('admin.penjual.barang.daftar');
    }

    public function hapus_barang($barang){
        $barang_hapus = Barang::Find($barang);
        $barang_hapus->delete();
        
        return redirect()->route('admin.penjual.barang.daftar')->with('success', 'anjay');
    }
}
