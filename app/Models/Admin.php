<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'admin' ;
    protected $primarykey = 'id';
    protected $fillable = [
        'nama_admin', 'email', 'password'
    ];


    public function artikel(){
        return $this->hasMany(
            Artikel::class,
            "id_admin",
            "id"
        );
    }

    public function penjual(){
        return $this->hasMany(
            Penjual::class,
            "id_admin",
            "id"
        );
    }

    public function pembeli(){
        return $this->hasMany(
            Pembeli::class,
            "id_admin",
            "id"
        );
    }

}
