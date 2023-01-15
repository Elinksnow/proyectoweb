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
        Schema::create('stock_cds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scd_id_medicamento');
            $table->unsignedBigInteger('scd_centro_distribucion');
            $table->integer('scd_cantidad');
            $table->string('scd_lote');
            $table->timestamps();
    
            $table->foreign('scd_id_medicamento')->references('id')->on('medicamentos');
            $table->foreign('scd_centro_distribucion')->references('id')->on('centro_distribucions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_cds');
    }
};
