<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaBarang',
        'kodeBarang',
        'hargaBarang',
        'jumlahBarang'
    ];
}
