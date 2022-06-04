<?php

namespace App\Http\Controllers\Web\Penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function daftar_pemesanan(){
        $penjual = auth('penjual')->user();
        $daftar_pemesanan = $penjual->pembelian;
        return view('penjual.pembelian.daftarpembelian', [
            "penjual" => $penjual,
            "daftar_pemesanan" =>$daftar_pemesanan
        ]);
    }
}
