<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comissao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comissao',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_emp');
            $table->string('id_func');
            $table->integer('id_serv');
            $table->string('tipo_comissao',1);
            $table->decimal('vl_pago',9,2);
            $table->string('status',1);
            $table->string('user_inclusao');
            $table->timestamps();
        });
        Schema::table('comissao',function(Blueprint $table){

            $table->foreign('id_emp')->references('id')->on('empresas');
            $table->foreign('id_func')->references('id')->on('users');
            $table->foreign('id_serv')->references('id')->on('servico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comissao');
    }
}
