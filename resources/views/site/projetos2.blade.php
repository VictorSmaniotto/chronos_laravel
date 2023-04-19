@extends('layouts.site')

@section('titulo', 'Projetos')

@section('conteudo')

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="img/logoChronos.png" class="d-inline-block mt-2 ms-auto" width="300"
                    alt="Logo Chronos">
            <div class="col-md-6 mx-auto">
                <p class="text-center">
                   Empresa capacitada para atender as suas necessitades.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">

            <form method="get" action="">
                <div class="col-md-12">
                    <input type="text" class="form-control site-pesquisar shadow-sm" name="nome" id="nome"
                        placeholder="Pesquisar projetos">

                </div>
            </form>

            <div class="site-categorias shadow-sm">
                <h3>Categorias</h3>
                <ul class="list-unstyled">
                    <li class="categoria-item"><a href="">Cultura</a></li>
                    <li class="categoria-item"><a href="">Esporte</a></li>
                    <li class="categoria-item"><a href="">Lazer</a></li>
                    <li class="categoria-item"><a href="">Saúde</a></li>
                    <li class="categoria-item last"><a href="">Técnologia</a></li>
                </ul>
            </div>

            <div class="top-posts shadow-sm">
                <h3>Mais Vistos</h3>
                <ul class="list-unstyled">
                    <li class="top-post-item">
                        <div class="top-post-number">1</div>
                        <div class="top-post-content">
                            <h4 class="fw-bold"><a href="">Título do projeto publicado</a></h4>
                            <p class="text-muted">Categoria - Jan. 2023</p>
                        </div>
                    </li>

                    <li class="top-post-item">
                        <div class="top-post-number">2</div>
                        <div class="top-post-content">
                            <h4 class="fw-bold"><a href="">Título do projeto publicado</a></h4>
                            <p class="text-muted">Categoria - Jan. 2023</p>
                        </div>
                    </li>

                    <li class="top-post-item">
                        <div class="top-post-number">3</div>
                        <div class="top-post-content">
                            <h4 class="fw-bold"><a href="">Título do projeto publicado</a></h4>
                            <p class="text-muted">Categoria - Jan. 2023</p>
                        </div>
                    </li>

                    <li class="top-post-item">
                        <div class="top-post-number">4</div>
                        <div class="top-post-content">
                            <h4 class="fw-bold"><a href="">Título do projeto publicado</a></h4>
                            <p class="text-muted">Categoria - Jan. 2023</p>
                        </div>
                    </li>

                    <li class="top-post-item">
                        <div class="top-post-number">5</div>
                        <div class="top-post-content">
                            <h4 class="fw-bold"><a href="">Título do projeto publicado</a></h4>
                            <p class="text-muted">Categoria - Jan. 2023</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9">
           <div class="cards">

            @foreach($projeto as $proj)

            <div class="card-projeto shadow">
                <a href="{{route('site.projetos.visualizar', ['id'=> $proj->id ])}}">
                    <img src={{ asset("storage/projetosMidias/{$proj->capa}") }} alt="Card imagem">
                <div class="card-corpo">
                    <p class="text-muted small">{{$proj->categoria->nome_categoria}} - {{$proj->data_entrega}}</p>
                    <h4 class="fw-bold">{{$proj->nome_projeto}}</h4>
                    <p class="fs-6">{{$proj->descricao}}</p>
                </div>
                </a>
            </div>

            @endforeach


            <div class="card-projeto shadow">
                <a href="#">
                    <img src="img/cards/entrepreneur-593371_1280.jpg" alt="Card imagem">
                <div class="card-corpo">
                    <p class="text-muted small">Categoria - Jan. 2023</p>
                    <h4 class="fw-bold">Título do projeto publicado</h4>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint odit ut repellendus asperiores? Omnis et possimus rem voluptatem laboriosam cumque ad nulla sunt sapiente blanditiis itaque, nobis repellat quas a.</p>
                </div>
                </a>
            </div>

            <div class="card-projeto shadow">
                <a href="#">
                    <img src="img/cards/entrepreneur-593371_1280.jpg" alt="Card imagem">
                <div class="card-corpo">
                    <p class="text-muted small">Categoria - Jan. 2023</p>
                    <h4 class="fw-bold">Título do projeto publicado</h4>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint odit ut repellendus asperiores? Omnis et possimus rem voluptatem laboriosam cumque ad nulla sunt sapiente blanditiis itaque, nobis repellat quas a.</p>
                </div>
                </a>
            </div>

            <div class="card-projeto shadow">
                <a href="#">
                    <img src="img/cards/entrepreneur-593371_1280.jpg" alt="Card imagem">
                <div class="card-corpo">
                    <p class="text-muted small">Categoria - Jan. 2023</p>
                    <h4 class="fw-bold">Título do projeto publicado</h4>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint odit ut repellendus asperiores? Omnis et possimus rem voluptatem laboriosam cumque ad nulla sunt sapiente blanditiis itaque, nobis repellat quas a.</p>
                </div>
                </a>
            </div>

            <div class="card-projeto shadow">
                <a href="#">
                    <img src="img/cards/entrepreneur-593371_1280.jpg" alt="Card imagem">
                <div class="card-corpo">
                    <p class="text-muted small">Categoria - Jan. 2023</p>
                    <h4 class="fw-bold">Título do projeto publicado</h4>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint odit ut repellendus asperiores? Omnis et possimus rem voluptatem laboriosam cumque ad nulla sunt sapiente blanditiis itaque, nobis repellat quas a.</p>
                </div>
                </a>
            </div>

            <div class="card-projeto shadow">
                <a href="#">
                    <img src="img/cards/entrepreneur-593371_1280.jpg" alt="Card imagem">
                <div class="card-corpo">
                    <p class="text-muted small">Categoria - Jan. 2023</p>
                    <h4 class="fw-bold">Título do projeto publicado</h4>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint odit ut repellendus asperiores? Omnis et possimus rem voluptatem laboriosam cumque ad nulla sunt sapiente blanditiis itaque, nobis repellat quas a.</p>
                </div>
                </a>
            </div>

            <div class="card-projeto shadow">
                <a href="#">
                    <img src="img/cards/entrepreneur-593371_1280.jpg" alt="Card imagem">
                <div class="card-corpo">
                    <p class="text-muted small">Categoria - Jan. 2023</p>
                    <h4 class="fw-bold">Título do projeto publicado</h4>
                    <p class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint odit ut repellendus asperiores? Omnis et possimus rem voluptatem laboriosam cumque ad nulla sunt sapiente blanditiis itaque, nobis repellat quas a.</p>
                </div>
                </a>
            </div>



           </div>
        </div>
    </div>

@endsection
