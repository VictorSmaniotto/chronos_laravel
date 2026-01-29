@csrf

<div class="col-md-12">
    <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
    <input
        type="email"
        class="form-control @error('email') is-invalid @enderror"
        name="email"
        id="email"
        required
        autocomplete="email"
        placeholder="nome@exemplo.com"
        value="{{ old('email') }}"
        value="{{ old('email') }}"
        @error('email') aria-describedby="email-error" aria-invalid="true" @enderror
    >
@error('email')
    <div id="email-error" class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>
<div class="col-md-12">
    <label for="password" class="form-label">Senha <span class="text-danger">*</span></label>
    <input
        type="password"
        class="form-control @error('password') is-invalid @enderror"
        name="password"
        id="password"
        required
        autocomplete="current-password"
        @error('password') aria-describedby="password-error" aria-invalid="true" @enderror
    >
@error('password')
    <div id="password-error" class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
</div>

<div class="col-6">
    <button type="submit" class="btn btn-primary">Entrar</button>
</div>
