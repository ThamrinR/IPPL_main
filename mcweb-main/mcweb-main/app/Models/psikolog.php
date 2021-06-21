<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psikolog extends Model
{
    use HasFactory;
    public $table = 'psikolog'; 
    protected $fillable = [
        'id',
        'nama_psikolog',
        'alamat',
        'no_telp',
        'email',
        'username',
        'password',
        'foto_psikolog',
        'biaya_konsultasi',
        'no_rekening',
        'tipe_bank',
        'kategori',
        'created_at',
        'update_at',
        'umur',
    ];
}
