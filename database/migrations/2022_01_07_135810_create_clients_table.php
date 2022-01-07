<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 20);
            $table->string('sobrenome', 60);
            $table->string('cpf', 14);
            $table->string('email', 60);
            $table->string('telefone', 15);
            $table->string('rua', 20);
            $table->string('numero', 5);
            $table->string('bairro', 60);
            $table->string('cep', 10);
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
        Schema::dropIfExists('clients');
    }
}
