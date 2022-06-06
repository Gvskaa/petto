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
        //user buat pembeda sesi yang akan login
        $penjual = auth('penjual')->user();
        //nampilin daftar barang yang penjual sedang login
        $daftar_barang = $penjual->barang;

        return view ('penjual.barang.daftar',[
            "penjual" => $penjual,
            "daftar_barang" => $daftar_barang
        ]);
    }

    public function submit_register_barang(Request $request){
        $penjual = auth('penjual')->user();

        //variabel foto barang dihapus
        $harga_barang = $request->harga_barang;
        $nama_barang = $request->nama_barang;
        $keterangan = $request->keterangan;
        $stok_barang = $request->stok_barang;
        $kategori_barang = $request->kategori_barang;
        $status_barang = $request->status_barang;

        //jika yang dimasukan jenis file, maka file nya akan disimpan ke store lokasi_foto_barang
        if($request->hasFile('foto_barang')){
            $lokasi_foto_barang = $request->foto_barang->store('lokasi_foto_barang');
        }

        $penjual->barang()->create([
            "harga_barang" => $harga_barang,
            "foto_barang" => $lokasi_foto_barang,
            "nama_barang" => $nama_barang,
            "keterangan" => $keterangan,
            "stok_barang" => $stok_barang,
            "kategori_barang" => $kategori_barang,
            "status_barang" => $status_barang,
        ]);
            return redirect()->route('penjual.barang.daftar');
    }

    public function halaman_register_barang(){
        return view('penjual.barang.tambah');
    }

    public function form_ubah_barang($penjual){
        $barang_model = Barang::FindOrFail($penjual);
        return view('penjual.barang.ubah', [
            "barang" => $barang_model
        ]);
    }

    public function ubah_barang($barang, Request $request){
        $penjual = auth('penjual')->user();

        //variabel foto dihapus
        $harga_barang = $request->harga_barang;
        $nama_barang = $request->nama_barang;
        $keterangan = $request->keterangan;
        $stok_barang = $request->stok_barang;
        $kategori_barang = $request->kategori_barang;
        $status_barang = $request->status_barang;

        $barang_model = Barang::FindOrFail($barang);

        //jika yang dimasukan jenis file, maka file nya akan disimpan ke store lokasi_ubah_fotobarang
        if($request->hasFile('foto_barang')){
            $lokasi_ubah_fotobarang = $request->foto_barang->store('lokasi_ubah_fotobarang');
        }

        $barang_model->update([
            "harga_barang" => $harga_barang,
            "foto_barang" => $lokasi_ubah_fotobarang,
            "nama_barang" => $nama_barang,
            "keterangan" => $keterangan,
            "stok_barang" => $stok_barang,
            "kategori_barang" => $kategori_barang,
            "status_barang" => $status_barang,
        ]);
        $barang_model->penjual()->associate($penjual);
        $barang_model->save();
        return redirect()->route('penjual.barang.daftar');
    }

    public function hapus_barang($barang){
        $barang_hapus = Barang::find($barang);
        $barang_hapus->delete();

        return redirect()->route('penjual.barang.daftar')->with('success', 'anjay');
    }
}
