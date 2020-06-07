<?php

use Illuminate\Database\Seeder;
use App\Cadastro;

class CadastrosTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

	Cadastro::create([
	    'nome' => 'Helbert Samuel',
	    'email' => 'helbertsamuel@gmail.com',
	    'nascimento' => '22/05/1990',
	    'telefone' => '31988291178',
	]);
    }
}
