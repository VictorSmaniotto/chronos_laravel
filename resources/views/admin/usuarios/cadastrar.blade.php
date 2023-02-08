@extends('layouts.admin')

@section('titulo', 'Cadastrar Usuário')

@section('conteudo')

<div class="row">
    <div class="col-md-6">

        <h2>Cadastrar Usuário</h2>
        <hr>
        <div class="formulario">
            <form class="row g-3" method="post" action="{{ route('admin.usuarios.cadastrar') }}">
                @include('admin.usuarios._formulario')
            </form>
        </div>
    </div>
</div>


@endsection
