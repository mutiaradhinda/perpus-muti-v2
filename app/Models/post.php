<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'tahun_terbit', 'id_penulis', 'id_penerbit', 'id_kategori', 'sinopsis', 'image'
    ];
}