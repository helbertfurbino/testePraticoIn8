<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastrosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
	Schema::create('cadastros', function (Blueprint $table)
	{
	    $table->id();
	    $table->string('nome');
	    $table->string('email')->unique();
	    $table->date('nascimento');
	    $table->string('telefone');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
	Schema::dropIfExists('cadastros');
    }
}
