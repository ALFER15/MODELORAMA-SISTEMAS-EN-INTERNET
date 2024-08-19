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
            //automaticamente nos da automaticamente not null e increment, crea una primary key
            $table->integer('product_number');
            $table->text('desc');
            $table->text('name');
            $table->text('branch');
            $table->text('price');
            $table->timestamps(); //fecha formateada
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
