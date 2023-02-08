@extends('layouts.admin')

@section('titulo', 'Cadastrar Categoria')

@section('conteudo')

<div class="row">
    <div class="col-md-6">

        <h2>Cadastrar Categoria</h2>
        <hr>
        <div class="formulario">
            <form class="row g-3" method="post" action="{{ route('admin.categorias.cadastrar') }}">
                @include('admin.categorias._formulario')
            </form>
        </div>
    </div>
</div>


@endsection
