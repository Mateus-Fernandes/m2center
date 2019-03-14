<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->mediumText('texto_historia_i')->nullable();
            $table->mediumText('texto_diferencial_i')->nullable();
            $table->string('texto_rodape_i')->nullable();
            $table->string('titulo_pag_servicos')->nullable();
            $table->string('descricao_pag_servicos')->nullable();
            $table->string('titulo_pag_blog')->nullable(); 
            $table->string('descricao_pag_blog')->nullable();          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboards');
    }
}
