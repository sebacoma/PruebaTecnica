<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller {
    public function index(){ return Order::with('detalles')->latest()->paginate(20); }
    public function show(Order $order){ return $order->load('detalles.product'); }
    public function store(StoreOrderRequest $r){
    return DB::transaction(function() use($r){
        $order = Order::create($r->only(['cliente_nombre','fecha']));
        foreach($r->input('detalles') as $d){
        $prod = Product::findOrFail($d['product_id']);
        OrderDetail::create([
            'order_id'=>$order->id,'product_id'=>$prod->id,
            'cantidad'=>$d['cantidad'],'precio_unitario'=>$prod->precio
        ]);
        }
        $order->refresh()->recalcTotal();
        return response()->json($order->load('detalles.product'),201);
    });
    }
    public function destroy(Order $order){ $order->delete(); return response()->noContent(); }
}

