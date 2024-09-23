<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;

    protected $table = 'table_pesan';

    protected $fillable = [
        'id_mahasiswa',
        'id_umkm',
        'id_pengirim',
        'pesan',
        'tanggal',
        'is_read',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'id_mahasiswa', 'id');
    }

    public function umkm()
    {
        return $this->belongsTo(umkm::class, 'id_umkm', 'id');
    }
}
