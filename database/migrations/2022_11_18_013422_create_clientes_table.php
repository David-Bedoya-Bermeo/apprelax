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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); 
            $table->string('tipo_Cliente');
            $table->string('nombreEmpresa')->nulleable();
            $table->string('nit')->nulleable();
            $table->string('pais');
            $table->unsignedBigInteger('persona_id')->nullable();
            
             //Campos Foraneos 
            $table->foreign('persona_id')
            ->references('id')
            ->on('personas') 
            ->OnDelete('set null')
            ->onUpdate('set null');
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
        Schema::dropIfExists('clientes');
    }
};
