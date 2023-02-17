@extends('layouts.site')

@section('titulo', 'Entrar')

@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">

            <h2 class="text-center">Bem vindo!</h2>
            <hr>
            <div class="formulario">
                <form class="row g-3" method="post" action="{{ route('post.login') }}">
                    @include('site._formulario')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
