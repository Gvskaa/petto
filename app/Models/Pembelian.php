<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $primarykey = 'id';
    protected $guarded = [];


    public function barang(){
        return $this->belongsTo(
            Barang::class,
            "id_barang",
            "id"
        );
    }

    public function pembeli(){
        return $this->belongsTo(
            Pembeli::class,
            "id_pembeli",
            "id"
        );
    }
}


