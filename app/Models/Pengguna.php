<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "penggunas";
    protected $primaryKey = "id";
    protected $fillable = [
        'username', 'akses_token', 'id_user_role', 'id_anggota', 'password', 'id_admin', 'id_petugas'
    ];
}
