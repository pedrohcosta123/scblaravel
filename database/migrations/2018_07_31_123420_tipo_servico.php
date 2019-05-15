<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_servico',function(Blueprint $table){

            $table->ingrements('id');
            $table->integer('id_empresa'); //foreign
            $table->string('for_user');
            $table->string('nome');
            $table->string('tipo',1);
            $table->decimal('vl_serv',9,4);
            $table->string('status',1);
            $table->timestamps();

        });

        Schema::table('tipo_servico', function(Blueprint $table){

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
        Schema::dropIfExists('tipo_servico');
    }
}
