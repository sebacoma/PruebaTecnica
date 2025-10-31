<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model {
    protected $fillable = ['order_id','product_id','cantidad','precio_unitario'];
    protected static function booted(): void {
        foreach(['created','updated','deleted'] as $e){
            static::$e(function($d){ $d->order?->recalcTotal(); });
        }
    }
    public function order(){ return $this->belongsTo(Order::class); }
    public function product(){ return $this->belongsTo(Product::class); }
}

