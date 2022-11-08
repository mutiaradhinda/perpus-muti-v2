<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Penerbit extends Model
{
   
    protected $table = "publishers";
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

        $query->where('id_penerbit', '=', $this->id);

        return $query->count();
    }

    public function getListBuku()
    {
        return Book::find()
            ->andWhere('id_penerbit', '=', $this->id)
            ->all();
    }

}
