<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pekerjaan extends Model
{
    use HasFactory;

    protected $table = 'table_pekerjaan';

    protected $fillable = [
        'id_umkm',
        'posisi',
        'deskripsi',
        'tempat_bekerja',
        'tanggal',
    ];

    public function umkm()
    {
        return $this->belongsTo(umkm::class, 'id_umkm', 'id');
    }
}
