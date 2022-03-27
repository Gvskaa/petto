<?php

namespace App\Http\Controllers\Web\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function store(Request $request){
        $pembeli = Pembeli::create([
            "nama_pembeli" => $request->nama_pembeli,
            "email_pembeli" => $request->email_pembeli,
            "password_pembeli" => $request->password_pembeli,
            "jk_pembeli" => $request->jk_pembeli,
            "alamat_pembeli" => $request->alamat_pembeli
        ]);
        return $pembeli;
    }

    public function update($id, Request $request){

        $pembeli = Pembeli::find($id);

        $pembeli->update([
            "nama_pembeli" => $request->nama_pembeli,
            "email_pembeli" => $request->email_pembeli,
            "password_pembeli" => $request->password_pembeli,
            "jk_pembeli" => $request->jk_pembeli,
            "alamat_pembeli" => $request->alamat_pembeli
        ]);
        return $pembeli;
    }

    public function destroy($id){

        $pembeli = Pembeli::find($id);
        $pembeli->delete();

        return response()->json(
            null,
            204
        );

    }
}
