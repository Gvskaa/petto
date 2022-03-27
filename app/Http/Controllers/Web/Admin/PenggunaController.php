<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    public function index(){ 

        $daftar_pengguna = Pengguna::all();
        return view('daftar_pengguna.index', compact(daftar_pengguna));
    }

}
