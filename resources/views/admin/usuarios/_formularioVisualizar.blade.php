@csrf

 {{-- @dd($errors) --}}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif

<div class="col-md-2">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" name="id" id="id" value="{{ old('id',$usuarios->id) }}">
</div>


<div class="col-md-10">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control @error('nome')  is-invalid @enderror" name="nome" id="nome" placeholder="Nome completo" value="{{ old('nome', $usuarios->nome) }}">
 @error('nome')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror


</div>
<div class="col-md-6">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Insira a E-mail" value="{{ old('email', $usuarios->email) }}">

@error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>



<div class="col-md-6">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" name="password" class="form-control @error('senha') is-invalid @enderror" id="senha" placeholder="********">
@error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>


<div class="col-md-6">
    <label for="tipo_usuario" class="form-label">Tipo</label>
    <select class="form-control" id="tipo_usuario" name="tipo_usuario">
        <option value="1" {{ old('tipo_usuario', $usuarios->tipo_usuario) == '1' ? 'selected' : '' }}>Administrador</option>
        <option value="2" {{ old('tipo_usuario', $usuarios->tipo_usuario) == '2' ? 'selected' : '' }}>Gestor</option>
        <option value="3" {{ old('tipo_usuario', $usuarios->tipo_usuario) == '3' ? 'selected' : '' }}>Professor</option>
        <option value="4" {{ old('tipo_usuario', $usuarios->tipo_usuario) == '4' ? 'selected' : '' }}>Aluno</option>
    </select>
</div>

<div class="col-md-6">
    <label for="situacao" class="form-label">Status</label>
    <select class="form-control" id="situacao" name="situacao">
        <option value="1" {{ old('situacao', $usuarios->situacao) == '1' ? 'selected' : '' }}>Ativo</option>
        <option value="0" {{ old('situacao', $usuarios->situacao) == '0' ? 'selected' : '' }}>Inativo</option>
    </select>
</div>



<div class="col-12">
    <a href="{{ route('admin.usuarios.index') }}" class="btn btn-danger">Voltar</a>
</div>
