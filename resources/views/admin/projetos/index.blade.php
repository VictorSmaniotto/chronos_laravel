@extends('layouts.admin')

@section('titulo', 'Projetos')

@section('conteudo')

<div class="row">
    <div class="col-md-12">
        <h1>Projetos</h1> <hr>
    </div>
</div>
<div class="row">
    <div>
        <a href="{{ route('admin.projetos.cadastrar') }}" class="btn btn-primary mb-3">Cadastrar</a>

    </div>

    <div class="table-responsive-sm">
        <table class="table table-hover table-striped mt-3 align-middle">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Objetivo</th>
                <th scope="col">Palavras Chave</th>
                <th scope="col">Capa</th>
                <th scope="col">Criado em</th>
                <th scope="col">Entregue em</th>
                <th scope="col">Status</th>
                <th scope="col">curso_id</th>
                <th scope="col">categoria_id</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projeto as $proj)


                <tr>
                  <th scope="row">{{$proj->id}}</th>
                  <td>{{$proj->nome_projeto}}</td>
                  <td>{{$proj->descricao}}</td>
                  <td>{{$proj->objetivo}}</td>
                  <td>{{$proj->palavras_chave}}</td>
                  <td>{{$proj->capa}}</td>
                  <td>{{$proj->data_criacao}}</td>
                  <td>{{$proj->data_entrega}}</td>
                  <td>{{$proj->labelStatus}}</td>
                  <td>{{$proj->curso->nome_curso}}</td>
                  <td>{{$proj->categoria->nome_categoria}}</td>
                  <td class="d-flex">
                      <a href="{{ route('admin.projetos.editar',['id'=> $proj->id ]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                      <form action="{{ route('admin.projetos.deletar', ['id' => $proj->id]) }}" method="post">
                          @csrf
                           @method('DELETE')
                         <button class="btn btn-danger btn-sm ms-2" onclick="return confirm('Deseja Deletar o Registro?')" type="submit"
                            name="Delete">
                             <i class="fas fa-trash"></i>
                         </button>
                   </form>
                  </td>
                  @empty

                  <tr>
                      <td colspan="5">
                          Nenhum registro encontrado
                      </td>
                  </tr>
              @endforelse
                </tr>


            </tbody>
          </table>
    </div>
</div>


@endsection
