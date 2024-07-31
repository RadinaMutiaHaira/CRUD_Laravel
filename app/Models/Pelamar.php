<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;

    protected $table      = 'pelamars';
    protected $primaryKey = 'id';
    protected $fillable   = ['nama_pelamar', 'jenis_kelamin', 'no_telepon'];
    protected $dates = ['created_at'];
}
