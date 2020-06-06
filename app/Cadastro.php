<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \Illuminate\Database\Eloquent\Model;

class Cadastro extends Model {
    
     public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	'id', 'nome', 'nascimento', 'telefone','email'
    ];
  
    protected $casts = [
	'email_verified_at' => 'datetime',
    ];

}
