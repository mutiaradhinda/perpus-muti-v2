<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semua extends Model
{
   
    protected $table = "semua";
    protected $primaryKey = "id";
    protected $timestamp = false;
    protected $fillable = [
        'nama', 'username', 'user_role'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'user_role', 'id');
    }
     

}
