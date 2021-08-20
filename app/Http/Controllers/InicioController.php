<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $nome = 'Maikon';
        return view('inicio', compact('nome'));
    }

    public function gravar(Request $request)
    {
        $dados = $request->all();
        $nome = $dados['nome'];
        $idade = $dados['idade'];
        $cnpjcpf = $dados['cnpjcpf'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];

        $cadastro = new Cadastro();
        $cadastro->nome = $nome;
        $cadastro->idade = $idade;
        $cadastro->cnpjcpf = $cnpjcpf;
        $cadastro->telefone = $telefone;
        $cadastro->celular = $celular;
        $cadastro->save();

        // Salvar sem retornar dados
        // $cadastro = Cadastro::create([
        //     'nome' => $nome,
        //     'idade' => $idade,
        //     'cnpjcpf' => $cnpjcpf,
        //     'telefone' => $telefone,
        //     'celular' => $celular,
        // ]);

        return redirect()->route('detalhes', $cadastro->controle);
    }

    public function detalhes($c)
    {
        $cadastro = Cadastro::where('controle', $c)->first();

        return view('detalhes', compact('cadastro'));
    }
}
