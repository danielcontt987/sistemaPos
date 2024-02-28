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
            $table->string('imagen')->nullable();
            $table->string('name');
            $table->string('service_description');
            $table->string('street');
            $table->string('ext');
            $table->integer('int')->nullable();
            $table->integer('colony_id');
            $table->string('telephone1');
            $table->integer('telephone2')->nullable();
            $table->string('telephone3')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('fiscal_rfc')->nullable();
            $table->string('fiscal_name')->nullable();
            $table->string('fiscal_street')->nullable();
            $table->integer('fiscal_ext')->nullable();
            $table->string('fiscal_int')->nullable();
            $table->integer('fiscal_colony_id');
            $table->string('api_invoice')->nullable();
            $table->string('image_fiscal')->nullable();
            $table->string('fiscal_regimen')->nullable();
            $table->string('cer_file')->nullable();
            $table->string('key_file')->nullable();
            $table->string('key_password')->nullable();
            $table->string('wifi')->nullable();
            $table->integer('fiscal_folio_number')->nullable();
            $table->string('fiscal_serie')->nullable();
            $table->boolean('suma_iva')->default(true);
            $table->integer('pin')->nullable();
            $table->string('last_folio')->nullable();
            $table->string('boss')->nullable();
            $table->string('puesto')->nullable();
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
