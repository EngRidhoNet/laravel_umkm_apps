<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mahasiswa extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable,Authenticatable, HasApiTokens;
    protected $table = 'table_mahasiswa';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'universitas',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_hp',
        'penghasilan',
        'pekerjaan',
        'foto_profil',
        'provinsi',
        'kota',
        'kecamatan',
        'kode_pos',
        'alamat',
    ];
}
