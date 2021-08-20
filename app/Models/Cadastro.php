<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $connection = 'projeto1';
    protected $table = 'tcadastro';
    protected $primaryKey = 'controle';
    public $timestamps = false;
    protected $fillable = ['nome', 'idade', 'cnpjcpf', 'telefone', 'celular'];

}
