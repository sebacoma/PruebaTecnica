<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $fillable = ['cliente_nombre','fecha','total'];
    protected $casts = ['fecha'=>'datetime'];
    public function detalles(){ return $this->hasMany(OrderDetail::class); }
    public function recalcTotal(): void {
        $total = $this->detalles()->sum(\DB::raw('cantidad * precio_unitario'));
        $this->update(['total'=>$total]);
    }
}

