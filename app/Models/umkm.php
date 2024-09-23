<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umkm extends Model
{
    use HasFactory;

    protected $table = 'table_umkm';
    protected $fillable = [
        'nama_umkm',
        'email',
        'password',
        'no_hp',
        'deskripsi',
        'kategori',
        'foto_profil',
        'foto_sampul',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'kode_pos',
        'alamat',
    ];
}
