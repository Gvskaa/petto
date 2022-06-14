<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class ArtikelController extends Controller
{
    public function halaman_daftar_artikel(){
        $admin = auth('admin')->user();
        $daftar_artikel = Artikel::all();

        return view ('admin.artikel.daftar',[
            "admin" => $admin,
            "daftar_artikel" => $daftar_artikel
        ]);
    }

    public function submit_register_artikel(Request $request){
        //judul dan isi artikel tidak boleh kosong
        $validated = $request->validate([
            'judul_artikel' => 'required',
            'isi_artikel' => 'required',
        ], [
            "required" => "Kolom :attribute wajib diisi"
        ]);

        $admin = auth('admin')->user();
        $judul_artikel =  $request->judul_artikel;
        $isi_artikel = $request->isi_artikel;

        if ($request->hasFile('gambar_artikel')) {
            $lokasi_gambar_artikel = $request->gambar_artikel->store('lokasi_gambar_artikel');
        }

        $admin->artikel()->create([
            "gambar_artikel" =>$lokasi_gambar_artikel,
            "judul_artikel" => $judul_artikel,
            "isi_artikel" => $isi_artikel,

        ]);
        return redirect()->route('admin.artikel.daftar');
    }

    public function halaman_register_artikel(){
        return view('admin.artikel.tambah');
    }

    public function form_ubah_artikel($artikel){
        $artikel_model = Artikel::FindOrFail($artikel);
        return view('admin.artikel.ubah', [
            "artikel" => $artikel_model
        ]);
    }

    public function lihat_artikel(Artikel $artikel){
        return view(
            'admin.artikel.lihat',
            [
                "artikel" //variabel yang akan ditulis di view
                =>$artikel //variabel di controller
            ]);
    }

    public function ubah_artikel($artikel, Request $request){
        $admin = auth('admin')->user();

        //variabel gambar artikel dihapus
        $judul_artikel =  $request->judul_artikel;
        $isi_artikel = $request->isi_artikel;

        $artikel_model = Artikel::FindOrFail($artikel);

        if($request->hasFile('gambar_artikel')){
            $lokasi_ubah_gambarartikel = $request->gambar_artikel->store('lokasi_ubah_gambarartikel');
        }
        $artikel_model->update([
            "gambar_artikel"=> $lokasi_ubah_gambarartikel,
            "judul_artikel" => $judul_artikel,
            "isi_artikel" => $isi_artikel,
        ]);
        $artikel_model->admin()->associate($admin);
        $artikel_model->save();
        return redirect()->route('admin.artikel.daftar');
    }

    public function hapus_artikel($artikel){
        $artikel_hapus = Artikel::findOrFail($artikel);
        $artikel_hapus->delete();

        return redirect()->route('admin.artikel.daftar')->with('Artikel', 'berhasil dihapus');
    }

    public function artikel_hapus($artikel){
        $hapus_artikel = Artikel::FindOrFail($artikel);
        $hapus_artikel->delete();

        return redirect()->route('admin.artikel.daftar');
    }
}
