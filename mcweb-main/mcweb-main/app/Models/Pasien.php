<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    public $table = 'users'; 
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'no_telp',
        'jenis_kelamin',
        'foto_profile',
        'status',
        'tgl_lahir',
        'tempat_lahir',
    ];
}
