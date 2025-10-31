<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ShippingQuoteService;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function quote(Request $request, ShippingQuoteService $svc)
    {
        $data = $request->validate([
            'comuna' => ['required', 'string', 'max:255'],
            'items' => ['nullable', 'array'],
            'items.*.product_id' => ['required_with:items', 'exists:products,id'],
            'items.*.quantity' => ['required_with:items', 'integer', 'min:1'],
            'products' => ['nullable', 'array'],
            'products.*.weight' => ['required_with:products', 'numeric', 'min:0.01'],
            'products.*.quantity' => ['required_with:products', 'integer', 'min:1'],
        ]);

        $productsPayload = $data['products'] ?? [];

        if (!empty($data['items'])) {
            foreach ($data['items'] as $it) {
                $p = Product::find($it['product_id']);
                $productsPayload[] = [
                    'weight' => (float) $p->peso,
                    'quantity' => (int) $it['quantity'],
                ];
            }
        }

        if (empty($productsPayload)) {
            return response()->json(['message' => 'Debe enviar items o products'], 422);
        }

        $payload = [
            'comuna' => $data['comuna'],
            'products' => $productsPayload,
        ];

        $tarifas = $svc->getRate($payload);

        return response()->json(['payload' => $payload, 'tarifas' => $tarifas]);
    }
}
