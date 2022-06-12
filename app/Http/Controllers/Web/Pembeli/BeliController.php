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
        return view('pembeli.barang.detail', [
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
        return redirect()->route('pembeli.chart'); //harusnya redirecta ke halaman daftar pemesanan yang pernah dibuat 
    }

    public function daftar_pemesanan(){
        $pembeli = auth('pembeli')->user();
        $daftar_pembelian = $pembeli->pembelian;

        return view('pembeli.barang.daftarpemesanan', [
            "pembeli" => $pembeli,
            "daftar_pembelian" =>$daftar_pembelian
        ]);
    }

    public function checkout($barang, Request $request){
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
        return redirect()->route('pembeli.checkout');
    }


    public function hapus_pesanan($pembelian){
            $pemesanan_hapus = Pembelian::FindOrFail($pembelian);
            $pemesanan_hapus->delete();
    
            return redirect()->route('pembeli.chart');
    }

    public function formulir_alamat($pembelian){
        $pembelian = Pembelian::findOrFail($pembelian); 
        return view('pembeli.barang.checkout',[
            'pembelian' =>$pembelian
        ]);
    }

    public function submit_formulir_pemesanan($pembelian, Request $request){

        $pembelian = Pembelian::findOrFail($pembelian); 
        
        if ($request->hasFile('bukti_pembayaran')) {
            $lokasi_bukti_pembayaran = $request->bukti_pembayaran->store('bukti_pembayaran');
            $pembelian->update([
                'bukti_pembayaran' => $lokasi_bukti_pembayaran,
                'status_pembayaran' => 'Menunggu Kofirmasi'
            ]);
        }
  
        return redirect()->route('pembeli.chart');
    }

    public function halaman_shop(){
        $pembeli = auth('pembeli')->user();
        $daftar_barang = Barang::all();
        return view('pembeli.barang.shop',[
            "pembeli"=> $pembeli,
            "daftar_barang" => $daftar_barang
        ]);
    }

}
