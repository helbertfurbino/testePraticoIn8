<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Cadastro;
use Illuminate\Routing\Controller;
use App\Http\Requests\CadastroRequest;

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

	
	if (Cadastro::create($request->all())) {
	    return response()->json([
			'status' => 1,
	    ]);
	};

	return response()->json([
		    'status' => 0,
	]);
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

	$user = Cadastro::findOrFail($id);

	if ($user->update($request->all())) {
	    return response()->json([
			'status' => 1,
	    ]);
	};

	return response()->json([
		    'status' => 0,
	]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
	
	$user = Cadastro::findOrFail($id);

	if ($user->delete()) {
	    return response()->json([
			'status' => 1,
	    ]);
	};

	return response()->json([
		    'status' => 0,
	]);
    }
}
