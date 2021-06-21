<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ubahprofile extends Model
{
    use HasFactory;
    public $table = 'users'; 
    protected $fillable = [
        'id',
        'nama',
        'email',
        'email_verified',
        'nama_toko',
        'user_id',
    ];
}
