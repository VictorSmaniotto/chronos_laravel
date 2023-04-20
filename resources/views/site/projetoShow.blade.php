@extends('layouts.site')

@section('titulo', 'Projetos')

@section('conteudo')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="projeto-aberto mt-5 ">
                <h2 class="text-center mb-3">Título do Projeto</h2>

                    <ul class="avatares d-flex flex-row justify-content-center list-unstyled">
                        <li class="p-2"><img  src="/img/perfil/avatar1.svg" alt="avatar" width="50" class="border border-light rounded-circle shadow" ></li>
                        <li class="p-2"><img  src="/img/perfil/avatar2.svg" alt="avatar" width="50" class="border border-light rounded-circle shadow" ></li>
                        <li class="p-2"><img  src="/img/perfil/avatar3.svg" alt="avatar" width="50" class="border border-light rounded-circle shadow" ></li>
                        <li class="p-2"><img  src="/img/perfil/avatar4.svg" alt="avatar" width="50" class="border border-light rounded-circle shadow" ></li>
                    </ul>


                <div class="projeto-corpo mx-auto text-center">
                    <img src="/img/cards/despaired-2261021_1280.jpg" alt=""  class="mb-4" id="capa">
                <p class="text-start">Nós do HERA temos como objetivo acelerar o desenvolvimento cognitivo das crianças através de atividades práticas, acompanhamento pedagógico individualizado e cuidados com o bem-estar infantil.

                    Para isso, criamos uma abordagem interdisciplinar que integra conhecimentos da psicologia do desenvolvimento, educação infantil e saúde infantil. Oferecemos uma variedade de atividades práticas, incluindo jogos educativos, brincadeiras lúdicas e experiências sensoriais, criadas para estimular o desenvolvimento cognitivo das crianças.

                    Nossos profissionais especializados em educação infantil acompanham de perto o desenvolvimento de cada criança, criando estratégias personalizadas para maximizar seu potencial. Além disso, nos preocupamos em promover um ambiente seguro, acolhedor e estimulante para as crianças, incentivando hábitos saudáveis de alimentação, sono e higiene, além de oferecer atividades de lazer que promovam a socialização e o desenvolvimento emocional.

                    Em resumo, nós do HERA oferecemos uma abordagem completa e inovadora para acelerar o desenvolvimento cognitivo das crianças, através de atividades práticas, acompanhamento pedagógico individualizado e cuidados com o bem-estar infantil. Nosso objetivo é proporcionar às crianças as ferramentas e o ambiente ideal para que possam alcançar seu máximo potencial...</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


{{-- <p>Nós do HERA temos como objetivo acelerar o desenvolvimento cognitivo das crianças através de atividades práticas, acompanhamento pedagógico individualizado e cuidados com o bem-estar infantil.

    Para isso, criamos uma abordagem interdisciplinar que integra conhecimentos da psicologia do desenvolvimento, educação infantil e saúde infantil. Oferecemos uma variedade de atividades práticas, incluindo jogos educativos, brincadeiras lúdicas e experiências sensoriais, criadas para estimular o desenvolvimento cognitivo das crianças.

    Nossos profissionais especializados em educação infantil acompanham de perto o desenvolvimento de cada criança, criando estratégias personalizadas para maximizar seu potencial. Além disso, nos preocupamos em promover um ambiente seguro, acolhedor e estimulante para as crianças, incentivando hábitos saudáveis de alimentação, sono e higiene, além de oferecer atividades de lazer que promovam a socialização e o desenvolvimento emocional.

    Em resumo, nós do HERA oferecemos uma abordagem completa e inovadora para acelerar o desenvolvimento cognitivo das crianças, através de atividades práticas, acompanhamento pedagógico individualizado e cuidados com o bem-estar infantil. Nosso objetivo é proporcionar às crianças as ferramentas e o ambiente ideal para que possam alcançar seu máximo potencial.</p> --}}
