<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('admin.profil');
        }else{
            abort(401);
        }
    }

    public function halaman_profil_admin(){
        $admin = Auth::guard('admin')->user();
        return view('admin.auth.profil', [
            'admin' => $admin
        ]);
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect()->route('admin.login.halaman');
}
}
