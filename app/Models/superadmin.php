<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class superadmin extends Model
{
    use HasFactory;

    protected $table = 'table_superadmin';
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];
}
