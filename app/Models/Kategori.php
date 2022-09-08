<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

     protected $table = "kategori";
     protected $primaryKey = "id";
     protected $fillable = ['id', 'kategori'];
    

     public function book()
    {
        return $this->hasMany('book::class');
    }

}
