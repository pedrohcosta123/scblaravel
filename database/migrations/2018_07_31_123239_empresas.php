<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas',function (Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('descr');
            $table->string('cnpj',14);
            $table->string('cpf',11);
            $table->string('fone_fixo',10);
            $table->string('fone_celular',11);
            $table->string('email');
            $table->string('cep',8);
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero',10);
            $table->string('cidade');
            $table->string('estado',2);
            $table->string('status',1);
            $table->string('for_user');            
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
         Schema::dropIfExists('empresas');
    }
}
