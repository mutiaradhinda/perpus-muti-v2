<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggotas";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama', 'alamat', 'email'
    ];
}
