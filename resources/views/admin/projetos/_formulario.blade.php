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
    <label for="nome_projeto" class="form-label">Título</label>
    <input type="text" class="form-control @error('titulo')  is-invalid @enderror" name="nome_projeto" id="nome_projeto" placeholder="Título do Projeto">
{{-- @error('nome')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror --}}


</div>
<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" id="descricao" rows="8"></textarea>

{{-- @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror --}}
</div>



<div class="col-md-12">
    <label for="objetivo" class="form-label">Objetivo</label>
    <textarea name="objetivo" class="form-control" id="objetivo" rows="5"></textarea>
{{-- @error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror --}}
</div>

<div class="col-md-12">
    <label for="palavras_chave" class="form-label">Palavras Chave</label>
    <textarea name="palavras_chave" class="form-control" id="palavras_chave" rows="5"></textarea>
{{-- @error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror --}}
</div>



<div class="col-md-3">
    <label for="capa" class="form-label">Capa</label>
    <input type="file" class="form-control" id="capa" name="capa">
</div>

<div class="col-md-3">
    <label for="data_criacao" class="form-label">Criado em</label>
    <input type="date" class="form-control" id="data_criacao" name="data_criacao">
</div>

<div class="col-md-3">
    <label for="data_entrega" class="form-label">Entregue em</label>
    <input type="date" class="form-control" id="data_entrega" name="data_entrega">
</div>

<div class="col-md-3">
    <label for="situacao" class="form-label">Situação</label>
    <select class="form-control" id="situacao" name="situacao">
        <option value="1">Ativo</option>
        <option value="2">Inativo</option>
    </select>
</div>



<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="" class="btn btn-danger">Cancelar</a>
</div>
