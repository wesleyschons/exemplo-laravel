<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTcadastro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tcadastro', function (Blueprint $table) {
            $table->integer('controle')->autoIncrement();
            $table->string('nome');
            $table->string('idade');
            $table->string('cnpjcpf');
            $table->string('telefone');
            $table->string('celular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tcadastro');
    }
}
