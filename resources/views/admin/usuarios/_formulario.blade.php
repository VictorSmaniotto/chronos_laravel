@csrf

{{-- @dd($errors)

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif --}}

<div class="col-md-12">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control @error('nome')  is-invalid @enderror" name="nome" id="nome" placeholder="Nome completo">
{{-- @error('nome')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror --}}


</div>
<div class="col-md-12">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Insira a E-mail">

{{-- @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror --}}
</div>



<div class="col-md-6">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" name="password" class="form-control" id="senha" placeholder="********">
{{-- @error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror --}}
</div>


<div class="col-md-3">
    <label for="tipo_usuario" class="form-label">Tipo</label>
    <select class="form-control" id="tipo_usuario" name="tipo_usuario">
        <option value="1">Administrador</option>
        <option value="2">Gestor</option>
        <option value="3">Professor</option>
        <option value="4" selected>Aluno</option>
    </select>
</div>

<div class="col-md-3">
    <label for="situacao" class="form-label">Status</label>
    <select class="form-control" id="situacao" name="situacao">
        <option value="1">Ativo</option>
        <option value="2">Inativo</option>
    </select>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="" class="btn btn-danger">Cancelar</a>
</div>
