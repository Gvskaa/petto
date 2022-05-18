<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Artikel extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'artikel';
    protected $foreignId = 'id_admin';
    protected $primarykey = 'id';
    protected $fillable = [
        'gambar_artikel', 'judul_artikel', 'isi_artikel'
    ];

    public function admin(){
        return $this->belongsTo(
            Artikel::class,
            "id_admin",
            "id"
        );
    }
}