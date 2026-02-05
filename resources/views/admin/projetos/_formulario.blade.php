@csrf

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

<div class="col-md-12">
    <label for="nome_projeto" class="form-label">Título</label>
    <input type="text" class="form-control @error('nome_projeto') is-invalid @enderror" name="nome_projeto"
        id="nome_projeto" placeholder="Título do Projeto" value="{{ old('nome_projeto', $projeto->nome_projeto)}}"
        required @error('nome_projeto') aria-describedby="error-nome_projeto" @enderror>
    @error('nome_projeto')
        <div class="invalid-feedback" id="error-nome_projeto">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control @error('descricao') is-invalid @enderror" id="descricao"
        rows="4" required @error('descricao') aria-describedby="error-descricao" @enderror>{{ old('descricao', $projeto->descricao) }}</textarea>

    @error('descricao')
        <div class="invalid-feedback" id="error-descricao">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="objetivo" class="form-label">Objetivo</label>
    <textarea name="objetivo" class="form-control @error('objetivo') is-invalid @enderror" id="objetivo"
        rows="4" required @error('objetivo') aria-describedby="error-objetivo" @enderror>{{ old('objetivo', $projeto->objetivo) }}</textarea>
    @error('objetivo')
        <div class="invalid-feedback" id="error-objetivo">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="palavras_chave" class="form-label">Palavras Chave</label>
    <textarea name="palavras_chave" class="form-control @error('palavras_chave') is-invalid @enderror"
        id="palavras_chave" rows="4" @error('palavras_chave') aria-describedby="error-palavras_chave" @enderror>{{ old('palavras_chave', $projeto->palavras_chave) }}</textarea>
    @error('palavras_chave')
        <div class="invalid-feedback" id="error-palavras_chave">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-12">
    <label for="capa" class="form-label">Capa</label>
    <input type="file" class="form-control @error('capa') is-invalid @enderror" id="capa" name="capa"
        value="{{ old('capa', $projeto->capa) }}" @error('capa') aria-describedby="error-capa" @enderror>
    @error('capa')
        <div class="invalid-feedback" id="error-capa">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-4">
    <label for="data_criacao" class="form-label">Criado em</label>
    <input type="date" class="form-control @error('data_criacao') is-invalid @enderror" id="data_criacao" name="data_criacao"
        value="{{ old('data_criacao', $projeto->data_criacao) }}" required @error('data_criacao') aria-describedby="error-data_criacao" @enderror>
    @error('data_criacao')
        <div class="invalid-feedback" id="error-data_criacao">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-4">
    <label for="data_entrega" class="form-label">Entregue em</label>
    <input type="date" class="form-control @error('data_entrega') is-invalid @enderror" id="data_entrega" name="data_entrega"
        value="{{ old('data_entrega', $projeto->data_entrega) }}" @error('data_entrega') aria-describedby="error-data_entrega" @enderror>
    @error('data_entrega')
        <div class="invalid-feedback" id="error-data_entrega">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-4">
    <label for="situacao" class="form-label">Situação</label>
    <select class="form-control @error('situacao') is-invalid @enderror" id="situacao" name="situacao" required @error('situacao') aria-describedby="error-situacao" @enderror>
        <option value="1" {{ old('situacao', $projeto->situacao) == '1' ? 'selected' : '' }}>Ativo</option>
        <option value="2" {{ old('situacao', $projeto->situacao) == '2' ? 'selected' : '' }}>Inativo</option>
    </select>
    @error('situacao')
        <div class="invalid-feedback" id="error-situacao">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="col-md-6">
    <label for="categoria_id" class="form-label">Categoria</label>
    <select class="form-control @error('categoria_id') is-invalid @enderror" id="categoria_id" name="categoria_id" required @error('categoria_id') aria-describedby="error-categoria_id" @enderror>
        <option value=""> Selecione </option>
        @foreach ($categorias as $cate)
            <option value="{{$cate->id}}" {{ old('categoria_id', $projeto->categoria_id) == $cate->id ? "selected" : "" }}>
                {{$cate->nome_categoria}}
            </option>
        @endforeach
    </select>
    @error('categoria_id')
        <div class="invalid-feedback" id="error-categoria_id">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="col-md-6">
    <label for="curso_id" class="form-label">Curso</label>
    <select class="form-control @error('curso_id') is-invalid @enderror" id="curso_id" name="curso_id" required @error('curso_id') aria-describedby="error-curso_id" @enderror>
        <option value=""> Selecione </option>
        @foreach ($cursos as $cur)
            <option value="{{$cur->id}}" {{ old('curso_id', $projeto->curso_id) == $cur->id ? "selected" : "" }}>
                {{$cur->nome_curso}}
            </option>
        @endforeach
    </select>
    @error('curso_id')
        <div class="invalid-feedback" id="error-curso_id">
            {{ $message }}
        </div>
    @enderror
</div>


<div class="col-12">
    <button type="submit" class="btn btn-primary">
        <i class="fa-solid fa-save"></i> Salvar
    </button>
    <a href="{{ route('admin.projetos.index') }}" class="btn btn-danger">
        <i class="fa-solid fa-times"></i> Cancelar
    </a>
</div>
