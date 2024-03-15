<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'asset_id',
        'qty',
        'total'
    ];
    public function namaProduct()
    {
        return $this->belongsTo('App\Models\Asset', 'asset_id');
    }
}
