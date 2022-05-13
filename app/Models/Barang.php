<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primarykey = 'id';
    protected $fillable =[
        'harga_barang', 'foto_barang', 'nama_barang', 'keterangan', 'stok_barang', 'kategori_barang', 'status_barang'
    ];
}
