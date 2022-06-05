<?php

namespace App\Http\Controllers\Web\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pembeli;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Barang;

class AuthController extends Controller
{

    public function halaman_index(){
        $pembeli = auth('pembeli')->user();
        $daftar_barang = Barang::all();
        return view('pembeli.auth.index',[
            "pembeli"=> $pembeli,
            "daftar_barang" => $daftar_barang
        ]);
    }

    public function halaman_register(){
        return view('pembeli.auth.register');
    }
    public function halaman_login(){
        return view('pembeli.auth.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $identitas = [
            "email" => $email,
            "password" => $password
        ];

        if(Auth::guard('pembeli')->attempt($identitas)){
            $request->session()->regenerate();
            return redirect()->route('pembeli.profil');
        }else{
            return back()->withErrors([
                'email'=> "Email atau Password Salah WOE",
            ])->onlyInput('email');
        }
    }


    public function halaman_profil(){
        $pembeli = Auth::guard('pembeli')->user();
        return view('pembeli.auth.profil', [
            'pembeli' => $pembeli
        ]);
    }

    public function submit_register(Request $request){
        $nama_pembeli = $request->nama_pembeli;
        $email = $request->email;
        $password = $request->password;
        $jk_pembeli = $request->jk_pembeli;
        $tlp_pembeli = $request->tlp_pembeli;
        $alamat_pembeli = $request->alamat_pembeli;


        Pembeli::create([
            "nama_pembeli" => $nama_pembeli,
            "email" => $email,
            "password" => Hash::make($password),
            "jk_pembeli" => $jk_pembeli,
            "tlp_pembeli" => $tlp_pembeli,
            "alamat_pembeli" => $alamat_pembeli

        ]);

        $identitas = [
            "email" => $email,
            "password" => $password
        ];

        if(Auth::guard('pembeli')->attempt($identitas)){
            $request -> session()->regenerate();

            return redirect()->route('pembeli.login.halaman');
        }else{
            return redirect()->route('pembeli.login.halaman');
        }
    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('pembeli.login.halaman');
}

    public function halaman_chart(){
        return view('pembeli.auth.chart');
    }
}