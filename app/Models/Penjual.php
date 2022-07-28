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
        'nama_penjual', 'email', 'password', 'nama_toko', 'tlp_penjual', 'status_penjual', 'alamat_penjual'
    ];

    public function admin(){
        return $this->belongsTo(
            Admin::class,
            "id_admin",
            "id"
        );
    }

    public function barang(){
        return $this->hasMany(
            Barang::class,
            "id_penjual",
            "id"
        );
    }


    public function pembelian(){
       return $this->hasManyThrough(
           Pembelian::class,
           Barang::class,
           'id_penjual',
           'id_barang',
           'id',
           'id'
       );
    }
}
