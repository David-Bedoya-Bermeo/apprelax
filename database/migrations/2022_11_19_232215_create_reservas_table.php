<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
        $table->id();
        $table->string('cantidad_Personas');
        $table->string('fecha_Reserva');
        $table->datetime('dia_Llegada');
        $table->datetime('dia_Salida');
        $table->string('estado');
        $table->unsignedBigInteger('user_id')->nullable; 
        $table->unsignedBigInteger('habitacion_id')->nullable;
        $table->unsignedBigInteger('cliente_id')->nullable;
        $table->unsignedBigInteger('empleado_id')->nullable;   

        //Campos Foraneos 
        
        $table->foreign('user_id')->references('id')->on('users') 
        ->OnDelete('set null'); 
        $table->foreign('habitacion_id')->references('id')
        ->on('habitacions') ->OnDelete('set null');
        $table->foreign('cliente_id')->references('id')
        ->on('clientes')->OnDelete('set null');
        $table->foreign('empleado_id')->references('id')
        ->on('empleados')->OnDelete('set null');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
