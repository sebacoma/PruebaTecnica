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
    Schema::create('order_details', function (Blueprint $t) {
        $t->id();
        $t->foreignId('order_id')->constrained()->cascadeOnDelete();
        $t->foreignId('product_id')->constrained()->restrictOnDelete();
        $t->unsignedInteger('cantidad');
        $t->decimal('precio_unitario',10,2);
        $t->timestamps();
        $t->index(['order_id','product_id']);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
