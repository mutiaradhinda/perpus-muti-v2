<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Semua;
use App\Models\User;

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

     public function admin()
    {
        return $this->hasOne('admin::class');
    }


}
