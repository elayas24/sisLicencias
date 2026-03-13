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
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45)->default('');
            $table->char('sigla', 1)->nullable();
            $table->decimal('monto', 14, 4)->default(0);
            $table->integer('cantidad_u')->nullable();
            $table->char('lapso', 1)->nullable();
            $table->string('style', 25)->nullable();
            $table->string('paypal_id', 45)->nullable();
            $table->string('stripe_id', 191)->nullable();
            $table->char('tipo', 1)->default('')->comment('1=Primario; 2=Personal');
            $table->integer('cantidad_min')->nullable()->comment('Cantidad minima de usuarios que debe tener el plan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
