<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $table = 'table_comment';
    protected $fillable = [
        'id_artikel',
        'id_mahasiswa',
        'komentar',
        'tanggal',
    ];

    public function artikel()
    {
        return $this->belongsTo(artikel::class, 'id_artikel', 'id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'id_mahasiswa', 'id');
    }
}
