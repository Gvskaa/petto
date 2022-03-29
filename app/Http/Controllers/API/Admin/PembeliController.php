<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pembeli;
use Illuminate\Support\Facades\Hash;

class PembeliController extends Controller
{
    public function index(){

        $daftar_pembeli = Pembeli::all();

        return response()->json([
            "status" => true,
            "code" => 200,
            "data" => $daftar_pembeli
        ], 201);
    }

    public function store(Request $request){
        $nama_pembeli = $request->nama_pembeli;
        $email_pembeli = $request->email_pembeli;
        $password_pembeli = $request->password_pembeli;
        
        $pembeli_baru = Pembeli::create([
            "nama_pembeli" => $nama_pembeli,
            "email_pembeli" => $email_pembeli,
            "password_pembeli" => Hash::make($password_pembeli)
        ]);

        return response()->json([
            "status" => true,
            "code" => 201,
            "data" => $pembeli_baru,
            "massage" => "Data pembeli baru berhasil ditambahkan"
        ], 201);

    }
}
