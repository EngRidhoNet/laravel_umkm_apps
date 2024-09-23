<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    protected $table = 'table_chat';

    protected $fillable = [
        'id_mahasiswa',
        'id_umkm',
        'pesan',
        'tanggal',
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
