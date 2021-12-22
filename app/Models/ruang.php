<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_ruangan',
        'nama_ruangan',
        'lantai_ruangan'
    ];
    
}
