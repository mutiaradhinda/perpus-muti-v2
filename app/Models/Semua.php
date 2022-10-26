<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semua extends Model
{
   
    protected $table = "semua";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'username', 'user_role'
    ];

     

}
