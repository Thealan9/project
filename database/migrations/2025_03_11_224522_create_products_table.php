<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product',40);
            $table->foreignId('supplier_id')->unsigned();
            $table->integer('stock')->unsigned()->nullable();
            $table->decimal('unit_price',8,2)->nullable();
            $table->string('image',150);

            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('suppliers')->odDelete('cascade')->onUpdate('cascade');
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
