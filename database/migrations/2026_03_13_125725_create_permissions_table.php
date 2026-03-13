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
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('name', 191);
            $table->string('guard_name', 191);
            $table->string('description', 191)->default('null');
            $table->string('description_en', 191)->nullable();
            $table->boolean('active')->default(true);
            $table->char('type', 1)->nullable()->default('2')->comment('TIPO DE PERMISO
0 = TÍTULO
1 = LECTURA
2 = EDICIÓN');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
