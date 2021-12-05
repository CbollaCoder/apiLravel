<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Situaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Situaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Actor')->nullable();
            $table->string('Imagen')->nullable();
            $table->string('Descripcion')->nullable();
            $table->string('BotonSi')->nullable();
            $table->string('BotonNo')->nullable();

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
        Schema::dropIfExists('Situaciones');
    }
}
