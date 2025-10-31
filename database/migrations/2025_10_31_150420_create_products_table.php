<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('products', function (Blueprint $t) {
            $t->id();
            $t->string('nombre');
            $t->decimal('precio',10,2)->default(0);
            $t->decimal('peso',10,2)->default(0);
            $t->decimal('ancho',10,2)->default(0);
            $t->decimal('alto',10,2)->default(0);
            $t->decimal('largo',10,2)->default(0);
            $t->unsignedInteger('stock')->default(0);
            $t->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
