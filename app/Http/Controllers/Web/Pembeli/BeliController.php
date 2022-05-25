<?php

namespace App\Http\Controllers\Web\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembelian;

class BeliController extends Controller
{
    public function detail_barang($barang){
        $barang_model = Barang::findOrFail($barang);
        return view('pembeli.barang.detail_barang', [
            "barang" => $barang_model
        ]);
    }

    public function pesan_barang($barang, Request $request){
        $pembeli = Auth::guard('pembeli')->user();
        $barang_model = Barang::findOrFail($barang);
        $jumlah_barang= $request->jumlah_barang;
        $pembelian = new Pembelian;

        $pembelian->pembeli()->associate($pembeli);
        $pembelian->barang()->associate($barang_model);
        $pembelian->jumlah_barang=$jumlah_barang;
        $pembelian->status_pembayaran='Belum Bayar';
        $pembelian->bukti_pembayaran='';

        $pembelian->save();
        return 'Ok'; //harusnya redirecta ke halaman daftar pemesanan yang pernah dibuat 


    }

    

}
