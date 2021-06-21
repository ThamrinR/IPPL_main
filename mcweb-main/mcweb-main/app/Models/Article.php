<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $table = 'articles'; 
    protected $fillable = [
        'id',
        'judul',
        'isi',
        'gambar',
    ];
}
