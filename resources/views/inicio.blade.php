@extends('layouts.app')
@section('body')
    <main>
        <div>
            <form action="{{ route('inicio.gravar') }}" method="post">
                @method('post')
                @csrf
                <div>
                    <label for="nome">Nome</label>
                    <br>
                    <input type="text" name="nome" id="nome" value="{{ $nome }}">
                </div>
                <div>
                    <label for="idade">Idade</label>
                    <br>
                    <input type="number" name="idade" id="idade">
                </div>
                <div>
                    <label for="cnpjcpf">CNPJ/CPF</label>
                    <br>
                    <input type="text" name="cnpjcpf" id="cnpjcpf">
                </div>
                <div>
                    <label for="telefone">Telefone</label>
                    <br>
                    <input type="number" name="telefone" id="telefone">
                </div>
                <div>
                    <label for="celular">Celular</label>
                    <br>
                    <input type="number" name="celular" id="celular">
                </div>
                <br>
                <button>Enviar</button>
            </form>
        </div>
    </main>
@endsection