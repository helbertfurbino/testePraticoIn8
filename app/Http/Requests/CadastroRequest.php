<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest { /**
 * Determine if the user is authorized to make this request.
 *
 * @return bool
 */

    public function authorize() {
	return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
	return [
	    'nome' => 'required',
	    'telefone' => 'required',
	    'email' => 'required',
	    'nascimento' => 'required',
	];
    }

    public function messages() {
	return [
	    'nome.required' => 'O nome é obrigatório',
	    'telefone.required' => 'O telefone é obrigatório',
	    'email.required' => 'O email é obrigatório',
	    'nascimento.required' => 'A data de nascimento é obrigatório',
	];
    }
}
