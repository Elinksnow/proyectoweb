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
        Schema::create('traspasos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tras_cd_origen');
            $table->unsignedBigInteger('tras_cd_destino');
            $table->string('tras_estado');
            $table->timestamps();

            $table->foreign('tras_cd_origen')->references('id')->on('centro_distribucions');
            $table->foreign('tras_cd_destino')->references('id')->on('centro_distribucions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traspasos');
    }
};
