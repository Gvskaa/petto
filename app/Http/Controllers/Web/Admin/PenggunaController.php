<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
class PenggunaController extends Controller
{
    public function index(){ 
        return view ('index');
    }

    public function login(){
        return view ('login');
    }

}
