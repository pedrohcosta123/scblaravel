<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato',function(Blueprint $table){

            $table->increments('id');
            $table->integer('id_empresa'); //foreign
            $table->string('cpf',11); 
            $table->string('fonefixo',10);
            $table->string('fonecelular',11);

        });

        Schema::table('contato',function(Blueprint $table){

            $table->foreign('id_empresa')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contato');
    }
}
