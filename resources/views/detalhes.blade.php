@extends('layouts.app')
@section('body')
    <main>
        <div>
            <span>Ola, meu nome é {{ $cadastro->nome }}, tenho {{ $cadastro->idade }} anos</span>
        </div>
    </main>
@endsection