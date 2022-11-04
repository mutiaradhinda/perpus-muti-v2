<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   
    protected $table = "admin";
    protected $primaryKey = "id";
    protected $fillable = [
        'password', 'username', 'user_role', 'nama_admin', 'email'
    ];

     public function role()
    {
        return $this->belongsTo(Role::class, 'user_role', 'id');
    }

}
