@extends('layouts.admin')

@section('conteudo')

<div class="row">
    <div class="col-md-6">

        <h2>Editar Usuário</h2>
        <hr>
        <div class="formulario">
            <form class="row g-3" method="post" action="{{ route('admin.usuarios.editar', ['id'=>$usuarios->id]) }}">
                @method('put')

                @include('admin.usuarios._formulario')
            </form>
        </div>
    </div>
</div>


@endsection
