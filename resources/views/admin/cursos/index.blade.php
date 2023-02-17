@extends('layouts.admin')

@section('titulo', 'Categorias')

@section('conteudo')

<div class="row">
    <div class="col-md-12">
        <h1>Cursos</h1> <hr>
    </div>
</div>
<div class="row">
    <div>
        <a href="{{ route('admin.cursos.cadastrar') }}" class="btn btn-primary mb-3">Cadastrar</a>

    </div>

    @include('admin.includes.alerta')


    <div class="table-responsive-sm">
        <table class="table table-hover table-striped mt-3 align-middle">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Situação</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>

                @forelse ($cursos as $curso)


              <tr>
                <th scope="row">{{$curso->id}}</th>
                <td>{{$curso->nome_curso}}</td>
                <td>{{$curso->descricao}}</td>
                <td>{{$curso->label_status}}</td>
                <td class="d-flex">
                    <a href="{{ route('admin.cursos.editar',['id'=> $curso->id ]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.cursos.deletar', ['id' => $curso->id]) }}" method="post">
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
