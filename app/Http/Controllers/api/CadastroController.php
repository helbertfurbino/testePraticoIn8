<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Cadastro;
use Illuminate\Routing\Controller;
use App\Http\Requests\CadastroRequest;
use Illuminate\Support\Facades\Log;

class CadastroController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

	return Cadastro::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
	
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CadastroRequest $request) {

	try{
	    Cadastro::create($request->all());

	    return response()->json([
			'msg' => 'Registro Inserido com sucesso!'
	    ]);
	} catch(\Exception $e){
	    Log::error($e->getMessage());
	    return response()->json([
			'error' => ['Não foi possível cadastrar'],
			    ], 422);
	}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

	return Cadastro::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
	//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CadastroRequest $request, $id) {

	try{
	    $user = Cadastro::findOrFail($id);
	    $user->update($request->all());

	    return response()->json([
			'msg' => 'Registro atualizado com Sucesso!'
	    ]);
	} catch(\Exception $e){
	    Log::error($e->getMessage());
	    return response()->json([
			'error' => ['Não foi possível atualizar']
			    ], 422);
	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

	try{
	    $user = Cadastro::findOrFail($id);
	    $user->delete();

	    return response()->json([
			'msg' => 'Registro Excluído com Sucesso!'
	    ]);
	} catch(\Exception $e){
	    Log::error($e->getMessage());
	    return response()->json([
			'error' => 'Erro ao efetuar exclusão'
			    ], 422);
	}
    }
}
