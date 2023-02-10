@extends('layouts.site')

@section('titulo', 'Início')

@section('conteudo')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center fs-1">CHRONOS</h2>
                <div class="col-md-6 mx-auto">
                    <p class="text-center">
                       Empresa capacitada para atender as suas necessitades.
                    </p>
                </div>

                <form method="get" action="">
                    <div class="col-md-6 mx-auto">
                        <input type="text" class="form-control is-invalid" name="nome" id="nome"
                            placeholder="Procurar projeto">
                    </div>

                </form>

            </div>

        </div>

        <div class="row g-4">
            <div class="col-md-12">

            </div>
            <div class="col-md-9">
                <img src="/img/cards/blogger-2838945_1280.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 ">
                <h3 class="mt-1">
                    Gestão de Projeto para Instituições Financeiras
                </h3>
                <p>
                   Obtenção de um conteúdo onde totalmente integrado a sistuações em que as Empresas devem estar atentas a cada passo dado para uma boa geração de renda e produção rentável, tendo em vista toda e qualquer situação, para que não ocorra erros futuros.
                </p>

                <a href="" class="btn btn-primary">Ver Completo</a>

            </div>

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

            <div class="mt-5 col-md-2 mx-auto">
                <a href="" class="btn btn-warning btn-lg">Ver Todos</a>
            </div>








    </div>


@endsection
