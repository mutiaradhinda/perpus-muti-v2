<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Author extends Model
{
   
    protected $table = "authors";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'alamat', 'telepon', 'email'
    ];

     public function book()
    {
        return $this->hasMany('book::class');
    }

    public function getJumlahBuku()
    {
        $query = Book::query();

        $query->where('id_penulis', '=', $this->id);

        return $query->count();
    }

}
