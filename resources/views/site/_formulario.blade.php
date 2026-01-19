@csrf

<div class="col-md-12">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" @error('email') aria-describedby="email-error" @enderror>
@error('email')
    <div class="invalid-feedback" id="email-error">
        {{ $message }}
    </div>
@enderror
</div>
<div class="col-md-12">
    <label for="password" class="form-label">Senha</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password" @error('password') aria-describedby="password-error" @enderror>
@error('password')
    <div class="invalid-feedback" id="password-error">
        {{ $message }}
    </div>
@enderror
</div>

<div class="col-6">
    <button type="submit" class="btn btn-primary">Entrar</button>
</div>
