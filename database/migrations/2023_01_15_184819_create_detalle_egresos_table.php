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
        Schema::create('detalle_egresos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('det_egreso_id');
            $table->unsignedBigInteger('id_medicamento');
            $table->integer('det_egre_cantidad');
            $table->string('det_egre_lote');
            $table->timestamps();

            $table->foreign('det_egreso_id')->references('id')->on('egresos');
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
        Schema::dropIfExists('detalle_egresos');
    }
};
