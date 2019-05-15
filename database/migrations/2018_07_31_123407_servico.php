<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_emp');
            $table->string('cpf',11);
            $table->integer('tipo_servico');// foreign
            $table->decimal('vl_servico',9,2);
            $table->string('for_user');
            $table->timestamps();

        });

        Schema::table('servico',function(Blueprint $table){
            $table->foreign('tipo_servico')->references('id')->on('tipo_servico');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servico');
    }
}
