<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Penjual;
use App\Models\Pembeli;
use App\Models\Artikel;
use App\Models\Barang;

class AuthController extends Controller
{
    public function halaman_login_admin(){
        return view ('admin.auth.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $identitas = [
            "email" => $email,
            "password" => $password
        ];

        if(Auth::guard('admin')->attempt($identitas)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors([
                'email'=> "Email atau Password Salah!",
            ])->onlyInput('email');
        }
    }

    //untuk menampilkan ada berapa jumlah artikel, penjual, pembeli, dan jumlah barang
    public function halaman_dashboard_admin(){
        $admin = Auth::guard('admin')->user();
        $jumlah_penjual = Penjual::count();
        $jumlah_artikel = Artikel::count();
        $jumlah_pembeli = Pembeli::count();
        $jumlah_barang = Barang::count();
        return view('admin.auth.dashboard', [
            'admin' => $admin,
            'jumlah_penjual' => $jumlah_penjual,
            'jumlah_artikel' => $jumlah_artikel,
            'jumlah_pembeli' => $jumlah_pembeli,
            'jumlah_barang' => $jumlah_barang
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login.halaman');
    }
}
