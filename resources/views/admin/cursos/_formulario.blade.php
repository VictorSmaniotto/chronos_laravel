@csrf

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif





<div class="col-md-12">
    <label for="nome_curso" class="form-label">Curso</label>
    <input type="text" class="form-control" name="nome_curso" id="nome_curso" value="{{ old('nome_curso', $curso->nome_categoria) }}" placeholder="Nome do curso">
    @error('nome_curso')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>

<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" name="descricao" id="descricao" rows="8">{{ old('nome_curso', $curso->nome_categoria) }}</textarea>
    @error('descricao')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>


<div class="col-md-3">
    <label for="situacao" class="form-label">Status</label>
    <select class="form-control" id="situacao" name="situacao">
        <option value="true" {{ old('situacao', $curso->situacao) == 'true' ? 'selected' : '' }}>Ativo</option>
        <option value="false" {{ old('situacao', $curso->situacao) == 'false' ? 'selected' : '' }}>Inativo</option>
    </select>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('admin.categorias.index') }}" class="btn btn-danger">Cancelar</a>
</div>

