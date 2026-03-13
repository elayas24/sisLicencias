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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empresa_id')->index('users_empresa_id_foreign');
            $table->string('username', 45)->unique('username_unique');
            $table->string('name', 40);
            $table->string('email', 191);
            $table->string('ap_paterno', 50)->nullable()->default(' ');
            $table->string('ap_materno', 50)->nullable()->default(' ');
            $table->boolean('active')->default(true)->comment('ESTADO DEL USUARIO
0 = Inactivo
1 = Activo
2 = Eliminado
6 = Incógnito Veedor
7 = Incógnito Admin');
            $table->char('register', 1)->nullable()->default('0');
            $table->integer('isAdmin')->nullable()->default(0);
            $table->string('cargo', 100)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion', 190)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('nro_doc', 20)->nullable();
            $table->string('doc_tipo', 3)->nullable();
            $table->string('expedido', 5)->nullable();
            $table->string('avatar', 191)->default('avatar0.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 191)->default('$2y$10$CmpHWyDhDgJVIyQGAmHeXOzue/8KFVpMLyqHdu0k/t.uI0dWrJveG');
            $table->integer('role_id');
            $table->integer('location_id')->nullable();
            $table->integer('ciudad_id')->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->nullable();
            $table->char('ciudad_trabajo', 2)->nullable();
            $table->string('email2', 100)->nullable();
            $table->string('telf_oficina', 20)->nullable();
            $table->string('interno', 10)->nullable();
            $table->string('telf_corporativo', 20)->nullable();
            $table->json('pref_calendar')->nullable();
            $table->char('sw_filter_dt', 1)->nullable()->default('1');
            $table->timestamp('updated_at')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('firma', 45)->nullable();
            $table->char('layout', 2)->nullable()->default('LV');
            $table->string('gmail', 191)->nullable();
            $table->char('app_version', 10)->nullable();
            $table->mediumText('firebase_token')->nullable();
            $table->string('phone_model', 191)->nullable();
            $table->char('all_locations', 1)->nullable();
            $table->char('pref_lang', 2)->nullable()->default('es');
            $table->integer('cost_param_id')->nullable()->comment('Costo hora hombre en dolares');
            $table->unsignedInteger('client_id')->default(0);
            $table->char('user_type', 1)->nullable()->comment('A = Administrador
J = Jefe Tecnico
T = Tecnico
S = Supervisor
U = Auxiliar');
            $table->string('color_avatar', 50)->nullable();
            $table->string('edge_sid')->nullable()->comment('SID de usuario de CMMSedge');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
