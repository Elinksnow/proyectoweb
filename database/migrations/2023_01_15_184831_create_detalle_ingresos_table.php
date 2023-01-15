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
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('det_ingreso_id');
            $table->unsignedBigInteger('id_medicamento');
            $table->integer('det_ing_cantidad');
            $table->string('det_ing_lote');
            $table->timestamps();

            $table->foreign('det_ingreso_id')->references('id')->on('ingresos');
            $table->foreign('id_medicamento')->references('id')->on('medicamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ingresos');
    }
};
