@extends('layouts.principal')

@section('conteudo')

    <h3>Editar cadastro</h3>

    <form action="{{route('clientes.update', $cliente['id'])}}" method="post" autocomplete="off">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{$cliente['nome']}}">
        <input type="submit" value="Salvar">
    </form>

    <br>

    <a href="{{route('clientes.index')}}">Voltar</a>

@endsection
