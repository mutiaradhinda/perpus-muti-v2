<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
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

}
