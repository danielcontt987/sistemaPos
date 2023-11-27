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
        Schema::create('clients', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('telephone');
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->integer('int')->nullable();
            $table->integer('ext');
            $table->enum('status',['active', 'inactive'])->default('active');
            $table->enum('type_user',['client'])->default('client');
            $table->integer('colony_id');
            $table->integer('business_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
