@extends('layouts.admin')

@section('conteudo')

<div class="row">
    <div class="col-md-6">
        <h2>Usuário</h2>
        <hr>
        <div class="formulario">
            <form class="row g-3" method="post" action="">
                @include('admin.usuarios._formulario')
            </form>
        </div>
    </div>
</div>


@endsection
