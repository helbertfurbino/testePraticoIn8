<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Cadastro extends Model {

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	'id', 'nome', 'nascimento', 'telefone', 'email'
    ];
    protected $casts = [
	'email_verified_at' => 'datetime',
    ];

    public function getNascimentoAttribute($value) {
	return isset($value) ? Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y') : null;
    }

    public function setNascimentoAttribute($value) {
	$this->attributes['nascimento'] =  isset($value) ? Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d') : null;
    }
    
    public function setTelefoneAttribute($value) {
	$this->attributes['telefone'] =  isset($value) ? preg_replace('/[^0-9]/', '', $value) : null;
    }
   
}
