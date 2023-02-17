@csrf

<div class="col-md-12">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" name="email" id="email">
@error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>
<div class="col-md-12">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control" name="password" id="password">
@error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>

<div class="col-6">
    <button type="submit" class="btn btn-primary">Entrar</button>
</div>
