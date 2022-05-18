<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    public function halaman_dashboard_admin(){
        $admin = Auth::guard('admin')->user();
        return view('admin.auth.dashboard', [
            'admin' => $admin
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login.halaman');
    }
}
