<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    public $table = 'booking'; 
    protected $fillable = [
        'jadwal_psikolog',
        'biaya_konsultasi',
        'bukti_pembayaran',
        'psikolog_id',
        'user_id',
        'status',
   
    ];
}
