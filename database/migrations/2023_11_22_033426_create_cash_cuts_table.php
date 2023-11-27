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
        Schema::create('cash_cuts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->double('amount')->default(0.00);
            $table->double('current')->default(0.00);
            $table->double('current_mount')->default(0.00);
            $table->double('difference')->default(0.00);
            $table->double('little_box')->default(0.00);
            $table->string('observations')->nullable();
            $table->integer('folio');
            $table->double('real_cash')->default(0.00);
            $table->double('real_card')->default(0.00);
            $table->double('real_check')->default(0.00);
            $table->double('real_transfer')->default(0.00);
            $table->double('total_accumulator')->default(0.00);
            $table->dateTime('date_opening');
            $table->dateTime('date_close')->nullable();
            $table->integer('salebox_id');
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
        Schema::dropIfExists('cash_cuts');
    }
};
