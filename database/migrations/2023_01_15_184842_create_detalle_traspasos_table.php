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
        Schema::create('detalle_traspasos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('det_traspaso_id');
            $table->unsignedBigInteger('id_medicamento');
            $table->string('det_tra_cantidad');
            $table->string('det_tra_lote');
            $table->timestamps();

            $table->foreign('det_traspaso_id')->references('id')->on('traspasos');
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
        Schema::dropIfExists('detalle_traspasos');
    }
};
