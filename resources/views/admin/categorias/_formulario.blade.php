@csrf

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
    @endforeach

@endif





<div class="col-md-12">
    <label for="nome_categoria" class="form-label">Categoria</label>
    <input type="text" class="form-control" name="nome_categoria" id="nome_categoria" value="{{ old('nome_categoria', $categoria->nome_categoria) }}" placeholder="Nome da Categoria">
    @error('nome_categoria')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="{{ route('admin.categorias.index') }}" class="btn btn-danger">Cancelar</a>
</div>

