<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Book extends Model
{
    protected $table = "book";
    protected $primaryKey = "id";
    protected $timestamp = false;
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
        return $this->belongsTo(Penerbit::class, 'id_penerbit', 'id');
    }

    public function getJumlahBuku()
    {
        $query = Book::query();

        return $query->count();
    }

     public function peminjaman()
    {
        return $this->hasOne('peminjaman::class');
    }

}