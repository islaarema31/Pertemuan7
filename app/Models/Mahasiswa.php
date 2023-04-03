<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Model
{
    protected $table = "mahasiswas";
    public $timestamps = false;
    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim',
        'nama',
        'tgl_lahir',
        'kelas',
        'jurusan',
        'email',
        'no_hp',
    ];
}
