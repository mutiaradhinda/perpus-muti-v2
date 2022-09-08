<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "book";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'tahun_terbit', 'id_penulis', 'id_penerbit', 'id_kategori', 'sinopsis', 'image'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'id_penulis', 'id');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'id_penerbit', 'id');
    }
}
