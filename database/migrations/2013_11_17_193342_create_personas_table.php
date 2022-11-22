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
        Schema::create('personas', function (Blueprint $table) 
        {
            $table->id();
            $table->string('nombre'); 
            $table->string('a_paterno');
            $table->string('a_materno'); 
            $table->string('fecha_Nacimiento'); 
            $table->string('edad');
            $table->string('tipo_Documento');
            $table->string('num_Documento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->rememberToken();
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
        Schema::dropIfExists('personas');

    }
};