<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_order',
        'userPengirim',
        'userPenerima',
        'userUnit',
        'grand_total',
        'tanggalTransaksi',
        
           
    ];
    public function AssetOrder()
    {
        return $this->hasMany('App\Models\OrderDetail', 'order_id');
    }

    public function userPe()
    {
        return $this->belongsTo('App\Models\User', 'userPenerima');
    }
    
    
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'userPengirim');
    }
}
