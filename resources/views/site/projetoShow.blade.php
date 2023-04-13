@extends('layouts.site')

@section('titulo', 'Projetos')

@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="lista-integrantes">
                <ul>
                    <li>
                        <img src="#" alt="" srcset="user1">
                    </li>
                    <li>
                        <img src="" alt="" srcset="user1">
                    </li>
                    <li>
                        <img src="" alt="" srcset="user1">
                    </li>
                    <li>
                        <img src="" alt="" srcset="user1">
                    </li>
                </ul>
            </div>
            <div id="dados-projeto">
                <ul>
                    <li>Categoria</li>
                    <li>Curso</li>
                    <li>Data da Publicação</li>
                </ul>
            </div>
            <div id="projeto-aberto">
                <h2>Título do Projeto</h2>
                <p>legenda para a publicação</p>

                <div class="capa-projeto">
                    <img src="" alt="Capa" class="img-fluid">
                </div>

                <div class="offset-2 col-md-8">
                    <div class="descricao-projeto">
                        <p>Nós do HERA temos como objetivo acelerar o desenvolvimento cognitivo das crianças através de atividades práticas, acompanhamento pedagógico individualizado e cuidados com o bem-estar infantil.

                            Para isso, criamos uma abordagem interdisciplinar que integra conhecimentos da psicologia do desenvolvimento, educação infantil e saúde infantil. Oferecemos uma variedade de atividades práticas, incluindo jogos educativos, brincadeiras lúdicas e experiências sensoriais, criadas para estimular o desenvolvimento cognitivo das crianças.

                            Nossos profissionais especializados em educação infantil acompanham de perto o desenvolvimento de cada criança, criando estratégias personalizadas para maximizar seu potencial. Além disso, nos preocupamos em promover um ambiente seguro, acolhedor e estimulante para as crianças, incentivando hábitos saudáveis de alimentação, sono e higiene, além de oferecer atividades de lazer que promovam a socialização e o desenvolvimento emocional.

                            Em resumo, nós do HERA oferecemos uma abordagem completa e inovadora para acelerar o desenvolvimento cognitivo das crianças, através de atividades práticas, acompanhamento pedagógico individualizado e cuidados com o bem-estar infantil. Nosso objetivo é proporcionar às crianças as ferramentas e o ambiente ideal para que possam alcançar seu máximo potencial.</p>
                    </div>
                </div>
            </div>
            <div class="compartilhar">
                <a href="#"></a>
            </div>
        </div>
    </div>
</div>

@endsection
