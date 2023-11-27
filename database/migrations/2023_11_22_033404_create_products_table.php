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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('folio');
            $table->string('name');
            $table->string('description')->nullable();
            $table->enum('measurement',['kg', 'pieza', 'box'])->default('pieza');
            $table->double('price_shop');
            $table->double('price_sale');
            $table->string('barcode')->nullable();
            $table->string('imagen')->nullable();
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('business_id');
            $table->timestamps();
            $table->softDeletes();
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
