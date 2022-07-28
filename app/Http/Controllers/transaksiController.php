<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class transaksiController extends Controller
{
    public function store(Request $request){
        Pembeli::transaction  (function () use ($request) {
        $data   = new Pembeli;
        $data   = $request->get('nama_pembeli');
        $data   = $request->get('email');
        $data   = $request->get('password');
        $data   = $request->get('tlp_pembeli');
        $data   = $request->get('alamat_pembeli');
        $data   = $request->get('foto_pembeli');

        $data->save();
        });
        
    }
}
