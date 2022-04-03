<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Laravel\Sanctum\HasApiTokens;

class Penjual extends Authenticatable 
{

    use HasFactory, HasApiTokens;
    protected $table = 'penjual';
    protected $foreignId = 'id_admin';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_pembeli', 'email_pembeli', 'password_pembeli', 'jk_pembeli', ' tlp_pembeli', 'alamat_pembeli' 
    ];

    public function admin(){
        return $this->belongsTo(
            Admin::class,
            "id_admin",
            "id"
        );
    }
}
