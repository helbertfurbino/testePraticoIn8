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

	DB::table('cadastros')->delete();

	Cadastro::create([
	    'nome' => 'Helbert Samuel',
	    'email' => 'helbertsamuel@gmail.com',
	    'nascimento' => '22/05/1990',
	    'telefone' => '31988291178',
	]);
	Cadastro::create([
	    'nome' => 'Karine Moreira',
	    'email' => 'karine@gmail.com.com',
	    'nascimento' => '22/05/1995',
	    'telefone' => '31988291178',
	]);
    }
}
