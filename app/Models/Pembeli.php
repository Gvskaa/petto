<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use phpDocumentor\Reflection\Types\Nullable;

class Pembeli extends Authenticatable
{
    use HasFactory, HasApiTokens;
    protected $table = 'pembeli';
    protected $foreignId = 'id_admin';
    protected $primarykey = 'id';
    protected $guarded = [];
    protected $hidden = ['password_pembeli'];
    protected $fillable = [
        'id_admin','nama_pembeli', 'email', 'password', 'jk_pembeli', 'tlp_pembeli', 'alamat_pembeli'
    ];

    public function admin(){
        return $this->belongsTo(
            Admin::class,
            "id_admin",
            "id"
        );
    }
}
