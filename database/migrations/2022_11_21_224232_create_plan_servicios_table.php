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
        Schema::create('plan_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicio_id')->unsigned(); 
            $table->unsignedBigInteger('plan_id')->unsigned();
            $table->unsignedBigInteger('habitacion_id')->unsigned();
            
            $table->foreign('servicio_id')->references('id')->on('servicios') 
            ->OnDelete('set null'); 
            $table->foreign('plan_id')->references('id')
            ->on('plans') ->OnDelete('set null');
            $table->foreign('habitacion_id')->references('id')
            ->on('habitacions') ->OnDelete('set null');
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
        Schema::dropIfExists('plan_servicios');
    }
};
