@extends('layouts.admin')

@section('titulo', 'Cadastrar Categoria')

@section('conteudo')

<div class="row">
    <div class="col-md-6">

        <h2>Cadastrar Curso</h2>
        <hr>
        <div class="formulario">
            <form class="row g-3" method="post" action="{{ route('admin.cursos.cadastrar') }}">
                @include('admin.cursos._formulario')
            </form>
        </div>
    </div>
</div>


@endsection
