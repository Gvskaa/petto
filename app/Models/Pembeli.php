<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'pembeli';
    protected $foreignId = 'id_admin';
    protected $primarykey = 'id_pembeli';
    protected $fillable = [
        'nama_pembeli', 'email_pembeli', 'password_pembeli', 'jk_pembeli', ' tlp_pembeli', 'alamat_pembeli' 
    ];
}
