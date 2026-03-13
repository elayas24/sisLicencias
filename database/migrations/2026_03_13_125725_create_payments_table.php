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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empresa_id');
            $table->integer('paypal_subscription_id')->nullable();
            $table->string('stripe_plan_id', 191)->nullable();
            $table->integer('plan');
            $table->char('tipo_pago', 1)->nullable()->comment('Tipo de pago: M: mensual, A: Anual');
            $table->dateTime('fecha_pago')->nullable()->comment('Fecha del pago efectuado');
            $table->decimal('monto', 14, 4)->comment('Monto pagado');
            $table->dateTime('fecha_vencimiento')->comment('Fecha vencimiento para realizar el otro pago');
            $table->integer('cantidad_u')->nullable();
            $table->string('id_payment', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
