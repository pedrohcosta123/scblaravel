<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empresa');
            $table->string('cpf',11);
            $table->string('nome');
            $table->date('dt_nasc');
            $table->string('estadocivil',2);
            $table->string('cep',8);
            $table->string('rua');
            $table->string('bairro');
            $table->integer('numero',10);
            $table->string('complemento');
            $table->string('cidade');
            $table->string('estado',2);
            $table->string('for_create'); 
            $table->timestamps();
        });

        Schema::table('clientes',function(Blueprint $table){
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
        Schema::dropIfExists('clientes');
    }
}
