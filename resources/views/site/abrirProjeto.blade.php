@extends('layouts.site')

@section('titulo', 'Projeto')

@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <img src="{{ asset("storage/projetosMidias/{$projeto->capa}") }}" alt="" class="img-fluid">
            <h3 class="mt-2">{{$projeto->nome_projeto}} </h3>
            <p class="mt-3">{{$projeto->descricao}}</p>
            <p class="mt-3">{{$projeto->objetivo}}</p>
            <p class="mt-3">{{$projeto->curso->nome_curso}}</p>
            <p class="mt-3">{{$projeto->categoria->nome_categoria}}</p>


        </div>
    </div>
</div>


@endsection
