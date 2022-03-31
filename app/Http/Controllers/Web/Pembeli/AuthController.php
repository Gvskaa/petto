<?php

namespace App\Http\Controllers\Web\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pembeli;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function halaman_register(){
        return view('pembeli.auth.register');
    }

    public function halaman_login(){
        return view('pembeli.auth.login');
    }

    public function submit_login(Request $request){
        $data = [
            'email' => $request->input('email_pembeli'),
            'password' => $request->input('password_pembeli'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('index');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
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
        $email_pembeli = $request->email_pembeli;
        $password_pembeli = $request->password_pembeli;
        $jk_pembeli = $request->jk_pembeli;
        $tlp_pembeli = $request->tlp_pembeli;
        $alamat_pembeli = $request->alamat_pembeli;


        Pembeli::create([
            "nama_pembeli" => $nama_pembeli,
            "email_pembeli" => $email_pembeli,
            "password_pembeli" => Hash::make($password_pembeli),
            "jk_pembeli" => $jk_pembeli,
            "tlp_pembeli" => $tlp_pembeli,
            "alamat_pembeli" => $alamat_pembeli

        ]);

        $identitas = [
            "email_pembeli" => $email_pembeli,
            "password_pembeli" => $password_pembeli
        ];

        if(Auth::guard('pembeli')->attempt($identitas)){
            $request -> session()->regenerate();

            return redirect()->route('/');
        }else{
            abort(401);
        }
    }
}
