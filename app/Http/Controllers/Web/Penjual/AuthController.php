<?php

namespace App\Http\Controllers\Web\Penjual;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Pembelian;

class AuthController extends Controller
{
    public function halaman_login_penjual(){
        return view ('penjual.auth.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $identitas = [
            "email" => $email,
            "password" => $password
        ];

        if(Auth::guard('penjual')->attempt($identitas)){
            $request->session()->regenerate();
            return redirect()->route('penjual.dashboard');
        }else{
            abort(401);
        }
    }

    public function halaman_dashboard_penjual(){
        $penjual = Auth::guard('penjual')->user();
        $jumlah_barang = Barang::count();
        $jumlah_pembelian = Pembelian::count();
        return view('penjual.auth.dashboard', [
            'penjual' => $penjual,
            "jumlah_barang" => $jumlah_barang,
            "jumlah_pembelian" => $jumlah_pembelian
        ]);
    }

    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('penjual.login.halaman');
}
}
