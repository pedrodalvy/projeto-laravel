@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('conteudo')

    <h3>Lista de Clientes</h3>
    <a href="{{route('clientes.create')}}">Novo Cliente</a>

    @if (count($clientes) > 0)
        <ol>
            @foreach($clientes as $cliente)
                <li>
                    {{ $cliente['nome']  }} |
                    <a href="{{route('clientes.edit', $cliente['id'])}}">Editar</a> |
                    <a href="{{route('clientes.show', $cliente['id'])}}">Visualizar</a> |
                    <form action="{{route('clientes.destroy', $cliente['id'])}}" method="post" autocomplete="off">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Remover">
                    </form>
                </li>
            @endforeach
        </ol>
        <hr>
        @for ($i = 0; $i < 10; $i++)
            {{ $i . ', ' }}
        @endfor

        <hr>
        @foreach($clientes as $cliente)
            <p>
                {{ $cliente['nome'] }} |
                @if ($loop->first)
                    (primeiro) |
                @endif
                @if ($loop->last)
                    (último) |
                @endif
                (indice {{ $loop->index }}) - {{ $loop->iteration }} / {{ $loop->count }}
            </p>
        @endforeach

    @endif
@endsection
