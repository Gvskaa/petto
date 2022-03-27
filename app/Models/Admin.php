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
        'nama_admin', 'email_admin', 'password_admin'
    ];

}
