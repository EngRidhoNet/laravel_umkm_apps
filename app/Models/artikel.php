<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'table_artikel';
    protected $fillable = [
        'id_umkm',
        'judul',
        'gambar',
        'deskripsi',
        'tanggal',
    ];

    public function umkm()
    {
        return $this->belongsTo(umkm::class, 'id_umkm', 'id');
    }
}
