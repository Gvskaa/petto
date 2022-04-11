<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primarykey = 'id';
    protected $fillable =[
        'gambar_artikel','judul_artikel',  'isi_artikel'
    ];
}
