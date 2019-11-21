@extends('layouts.principal')
@section('titulo', 'Departamentos')
@section('conteudo')

    <h3>Departamentos</h3>

    <ul>
        <li>Computadores</li>
        <li>Eletrônicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>

    @component('components.alerta', ['titulo' => 'Erro inesperado', 'tipo' => 'error'])
{{--        <p><strong>Erro inesperado</strong></p>--}}
        <p>Ocorreu um erro inesperado</p>
    @endcomponent

    @alerta(['titulo' => 'Erro inesperado', 'tipo' => 'error'])
        {{--        <p><strong>Erro inesperado</strong></p>--}}
        <p>Ocorreu um erro inesperado</p>
    @endalerta
@endsection
