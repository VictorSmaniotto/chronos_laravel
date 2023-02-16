@extends('layouts.site')

@section('titulo', 'Início')

@section('conteudo')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mt-3 mb-3">PROJETOS</h2>
                <form method="get" action="">
                    <div class="col-md-6 mx-auto d-flex">
                        <input type="text" class="form-control me-1" name="nome" id="nome"
                            placeholder="Procurar projeto">

                            <button type="submit" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>

                    </div>

                </form>

            </div>

        </div>


        <div class="row g-4 mt-5">

            <div class="col-md-6">
                <img src="/img/cards/despaired-2261021_1280.jpg" alt="" class="img-fluid">

                <h3 class="mt-1">Gestão de Projeto Hospitalares </h3>

                <p class="mt-3">O assunto em questão sugere uma ampla visão do contexto, pois iremos tratar principalmente de questões unilaterais de cada etapa para que possa ser assim avalida de forma complexa e objetiva até o exato ponto de cada item citado.</p>

                    <a href="" class="btn btn-primary">Ver Completo</a>
            </div>
            <div class="col-md-6">
                <img src="/img/cards/entrepreneur-593371_1280.jpg" alt="" class="img-fluid">

                <h3 class="mt-1">Gestão de Projeto Organizacionais</h3>

                <p class="mt-3">De forma ampla iremos abordar todas as etapas onde será ressaltado questões em pode ser efertuado ajustes e formas de decisões que podem serem tomadas como base para as mais diversas situações.</p>

                    <a href="" class="btn btn-primary">Ver Completo</a>
            </div>
        </div>
        </div>







    </div>


@endsection
