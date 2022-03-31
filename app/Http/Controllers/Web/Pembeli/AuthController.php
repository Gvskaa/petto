<?php

namespace App\Http\Controllers\Web\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pembeli;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function halaman_register(){
        return view('pembeli.auth.register');
    }

    public function submit_register(Request $request){
        $nama_pembeli = $request->nama_pembeli;
        $email_pembeli = $request->email_pembeli;
        $password_pembeli = $request->password_pembeli;

        $pembeli_baru = Pembeli::create([
            "nama_pembeli" => $nama_pembeli,
            "email_pembeli" => $email_pembeli,
            "password_pembeli" => Hash::make($password_pembeli)
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
