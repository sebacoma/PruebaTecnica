<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->delete();

        Product::insert([
            [
                'nombre' => 'Caja S',
                'precio' => 1200,
                'peso'   => 0.5,
                'ancho'  => 10, 'alto' => 5, 'largo' => 15,
                'stock'  => 50,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'nombre' => 'Caja M',
                'precio' => 2500,
                'peso'   => 1.2,
                'ancho'  => 20, 'alto' => 10, 'largo' => 25,
                'stock'  => 35,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'nombre' => 'Caja L',
                'precio' => 4500,
                'peso'   => 2.8,
                'ancho'  => 30, 'alto' => 15, 'largo' => 40,
                'stock'  => 20,
                'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }
}
