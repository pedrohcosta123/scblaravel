<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profissao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissao',function(Blueprint $table){

            $table->string('cpf_cli')->unique();
            $table->string('empresa');
            $table->string('cpf',11);
            $table->string('cnpj',14);
            $table->decimal('rend_bruta',10,2);
            $table->decimal('rend_liq',10,2);
            $table->string('profissao');
            $table->string('aposentado',1);
            $table->date('dt_admiss');
            $table->string('cep',8);
            $table->string('rua');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('estado',2);
            $table->string('tel_contato');

        });

        Schema::table('profissao',function(Blueprint $table){
            $table->foreign('cpf_cli')->references('cpf')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissao');
    }
}
