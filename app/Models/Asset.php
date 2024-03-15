<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'serialNumber',
        'inventarisNumber',
        'namaBarang',
        'typeBarang',
        'brandBarang',
        'hargaBarang',
        'qty',
       'detailBarang',
        ];
}
