<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ministrante');
            $table->date('inicio');
            $table->date('fim');
            $table->text('bibliografia')->nullable();
            $table->integer('disciplina_id')->unsigned();

            $table->foreign('disciplina_id')->references('id')->on('diciplinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
