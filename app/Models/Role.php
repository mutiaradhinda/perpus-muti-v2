<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Semua;

class Role extends Model
{
   
    protected $table = "user_role";
    protected $primaryKey = "id";
    protected $fillable = [
        'role'    
    ];

     public function semua()
    {
        return $this->hasOne('semua::class');
    }


}
