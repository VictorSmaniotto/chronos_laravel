## 2024-12-21 - [Bootstrap 5 Server-Side Validation Pattern]
**Learning:** Bootstrap 5 requires `.is-invalid` class on inputs to show `.invalid-feedback`. Blade's `@error` directive is present but only renders the message; it doesn't automatically add the class.
**Action:** When working on forms, always wrap inputs with `class="form-control @error('field') is-invalid @enderror"` to ensure users actually see the validation messages.
