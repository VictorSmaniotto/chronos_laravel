@extends('layouts.admin')

@section('titulo', 'Usuários')

@section('conteudo')

<div class="row">
    <div class="col-md-12">
        <h1>Usuários</h1> <hr>
    </div>
</div>
<div class="row">
    <div>
        <a href="{{ route('admin.usuarios.cadastrar') }}" class="btn btn-primary mb-3">Cadastrar</a>

    </div>

    @include('admin.includes.alerta')


    <div class="table-responsive-sm">
        <table class="table table-hover table-striped mt-3 align-middle">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>

                @forelse ($usuarios as $user)


              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->nome}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->label_tipo}}</td>
                <td>{{$user->label_status}}</td>
                <td class="d-flex">
                    <a href="{{ route('admin.usuarios.visualizar',['id'=> $user->id ]) }}" class="btn btn-sm btn-info text-light me-2"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('admin.usuarios.editar',['id'=> $user->id ]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.usuarios.deletar', ['id' => $user->id]) }}" method="post">
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
