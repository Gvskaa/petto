<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Barang extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'barang';
    protected $foreignId = 'id_penjual';
    protected $primarykey = 'id';
    protected $fillable = [
        'harga_barang', 'foto_barang', 'nama_barang', 'keterangan', 'stok_barang', 'kategori_barang', 'status_barang'
    ];

    public function admin(){
        return $this->belongsTo(
            Barang::class,
            "id_admin",
            "id"
        );
    }

    public function penjual(){
        return $this->belongsTo(
            Penjual::class,
            'id_penjual',
            'id'
        );
    }
}
