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
        Schema::create('business', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('imagen')->nullable();
            $table->string('fiscal_name');
            $table->string('reason_social');
            $table->integer('telephone')->nullable();
            $table->string('email');
            $table->string('fiscal_street');
            $table->boolean('iva')->default(false);
            $table->integer('bank_id');
            $table->integer('colony_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business');
    }
};
