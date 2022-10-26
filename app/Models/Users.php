<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
   
    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'username', 'user_role'
    ];

     

}
