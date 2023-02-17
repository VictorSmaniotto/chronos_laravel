@extends('layouts.admin')

@section('titulo', 'Cadastrar')

@section('conteudo')

<div class="row">
    <div class="col-md-6">

        <h2>Cadastrar Projeto</h2>
        <hr>
        <div class="formulario">
            <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('admin.projetos.cadastrar') }}">
                @include('admin.projetos._formulario')


            </form>
        </div>
    </div>
</div>


@endsection
