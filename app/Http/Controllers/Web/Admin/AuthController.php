<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Penjual;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function halaman_login_admin(){
        return view ('admin.auth.login');
    }

    public function halaman_register_penjual(){
        return view('admin.auth.registrasipenjual');
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
            abort(401);
        }
    }

    public function halaman_dashboard_admin(){
        $admin = Auth::guard('admin')->user();
        return view('admin.auth.dashboard', [
            'admin' => $admin
        ]);
    }

    public function submit_register_penjual(Request $request){
        $nama_penjual = $request->nama_penjual;
        $email = $request->email;
        $password = $request->password;
        $nama_toko = $request->nama_toko;
        $status_penjual = $request->status_penjual;
        $tlp_penjual = $request->tlp_penjual;
        


        Penjual::create([
            "nama_penjual" => $nama_penjual,
            "email" => $email,
            "password" => Hash::make($password),
            "nama_toko" => $nama_toko,
            "status_penjual" => $status_penjual,
            "tlp_penjual" => $tlp_penjual,

        ]);

        $identitas = [
            "email" => $email,
            "password" => $password
        ];

        if(Auth::guard('penjual')->attempt($identitas)){
            $request -> session()->regenerate();

            return redirect()->route('admin.dashboard');
        }else{
            abort(401);
        }
    }

    public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('admin.login.halaman');
    }
}
