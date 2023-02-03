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
        <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>

    </div>

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
              <tr>
                <th scope="row">1</th>
                <td>Markinhos da Silva Lima</td>
                <td>teste@teste.com</td>
                <td>Aluno</td>
                <td>Ativo</td>
                <td>
                    <a href="" class="btn btn-sm btn-info text-light"><i class="fas fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>teste@teste.com</td>
                <td>Aluno</td>
                <td>Ativo</td>
                <td>
                    <a href="" class="btn btn-sm btn-info text-light"><i class="fas fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>João</td>
                <td>teste@teste.com</td>
                <td>Admin</td>
                <td>Ativo</td>
                <td>
                    <a href="" class="btn btn-sm btn-info text-light"><i class="fas fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
</div>


@endsection
