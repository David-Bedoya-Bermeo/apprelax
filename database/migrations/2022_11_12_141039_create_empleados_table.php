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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('tipoContrato');
            $table->double('salario');
            $table->string('estado');
            $table->string('fechaIngreso'); 
            $table->string('fechaRetiro'); 
            $table->unsignedBigInteger('persona_id')->nullable();
            
            $table->foreign('persona_id')
            ->references('id')->on('personas') ->OnDelete('set null')->onUpdate('set null');
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
        Schema::dropIfExists('empleados');
    }
};
