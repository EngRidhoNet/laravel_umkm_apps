<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apply extends Model
{
    use HasFactory;

    protected $table = 'table_apply';

    protected $fillable = [
        'id_mahasiswa',
        'id_umkm',
        'id_artikel',
        'status',
        'dokumen'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'id_mahasiswa', 'id');
    }

    public function umkm()
    {
        return $this->belongsTo(umkm::class, 'id_umkm', 'id');
    }

    public function artikel()
    {
        return $this->belongsTo(artikel::class, 'id_artikel', 'id');
    }
}
