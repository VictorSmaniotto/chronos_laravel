@csrf



@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif

<div class="col-md-12">
    <label for="nome_projeto" class="form-label">Título</label>
    <input type="text" class="form-control @error('nome_projeto') is-invalid @enderror" name="nome_projeto"
        id="nome_projeto" placeholder="Título do Projeto" value="{{ old('nome_projeto', $projeto->nome_projeto)}}"
        @error('nome_projeto') aria-describedby="nome_projeto_feedback" @enderror>
    @error('nome_projeto')
        <div class="invalid-feedback" id="nome_projeto_feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control @error('descricao') is-invalid @enderror" id="descricao"
        rows="4" @error('descricao') aria-describedby="descricao_feedback" @enderror>{{ old('descricao', $projeto->descricao) }}</textarea>

    @error('descricao')
        <div class="invalid-feedback" id="descricao_feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="objetivo" class="form-label">Objetivo</label>
    <textarea name="objetivo" class="form-control @error('objetivo') is-invalid @enderror" id="objetivo"
        rows="4" @error('objetivo') aria-describedby="objetivo_feedback" @enderror> {{ old('objetivo', $projeto->objetivo) }} </textarea>
    @error('objetivo')
        <div class="invalid-feedback" id="objetivo_feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="palavras_chave" class="form-label">Palavras Chave</label>
    <textarea name="palavras_chave" class="form-control @error('palavras_chave') is-invalid @enderror"
        id="palavras_chave" rows="4" @error('palavras_chave') aria-describedby="palavras_chave_feedback" @enderror>{{ old('palavras_chave', $projeto->palavras_chave) }}</textarea>
    @error('palavras_chave')
        <div class="invalid-feedback" id="palavras_chave_feedback">
            {{ $message }}
        </div>
    @enderror
</div>



<div class="col-md-12">
    <label for="capa" class="form-label">Capa</label>
    <input type="file" class="form-control" id="capa" name="capa" value="{{ old('capa', $projeto->capa) }}">
</div>

<div class="col-md-4">
    <label for="data_criacao" class="form-label">Criado em</label>
    <input type="date" class="form-control" id="data_criacao" name="data_criacao"
        value="{{ old('data_criacao', $projeto->data_criacao) }}">
</div>

<div class="col-md-4">
    <label for="data_entrega" class="form-label">Entregue em</label>
    <input type="date" class="form-control" id="data_entrega" name="data_entrega"
        value="{{ old('data_entrega', $projeto->data_entrega) }}">
</div>

<div class="col-md-4">
    <label for="situacao" class="form-label">Situação</label>
    <select class="form-control" id="situacao" name="situacao">
        <option value="1" {{ old('situacao', $projeto->situacao) == '1' ? 'selected' : '' }}>Ativo</option>
        <option value="2" {{ old('situacao', $projeto->situacao) == '2' ? 'selected' : '' }}>Inativo</option>
    </select>
</div>


<div class="col-md-6">
    <label for="categoria_id" class="form-label">Categoria</label>
    <select class="form-control @error('categoria_id') is-invalid @enderror" id="categoria_id" name="categoria_id" @error('categoria_id') aria-describedby="categoria_id_feedback" @enderror>
        <option value=""> Selecione </option>
        @foreach ($categorias as $cate)
            <option value="{{$cate->id}}" {{ (old('categoria_id', $projeto->categoria_id) == $cate->id) ? 'selected' : '' }}>
                {{$cate->nome_categoria}}
            </option>
        @endforeach
    </select>
    @error('categoria_id')
        <div class="invalid-feedback" id="categoria_id_feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6">
    <label for="curso_id" class="form-label">Curso</label>
    <select class="form-control @error('curso_id') is-invalid @enderror" id="curso_id" name="curso_id" @error('curso_id') aria-describedby="curso_id_feedback" @enderror>
        <option value=""> Selecione </option>
        @foreach ($cursos as $cur)
            <option value="{{$cur->id}}" {{ (old('curso_id', $projeto->curso_id) == $cur->id) ? 'selected' : '' }}>
                {{$cur->nome_curso}}
            </option>
        @endforeach
    </select>
    @error('curso_id')
        <div class="invalid-feedback" id="curso_id_feedback">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('admin.projetos.index') }}" class="btn btn-danger">Cancelar</a>
</div>
