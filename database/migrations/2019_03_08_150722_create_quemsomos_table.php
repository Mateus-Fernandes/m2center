<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuemsomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quemsomos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('titulo_qs', 100);
            $table->string('subtitulo_qs');
            $table->string('video')->nullable();
            $table->string('historia')->nullable();
            $table->string('missao')->nullable();
            $table->string('i_missao')->nullable();
            $table->string('valores')->nullable();
            $table->string('i_valores')->nullable();
            $table->string('objetivo')->nullable();
            $table->string('i_objetivo')->nullable();
            $table->string('meta')->nullable();
            $table->string('i_meta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quemsomos');
    }
}
