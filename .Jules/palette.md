## 2024-05-23 - Login Form Accessibility
**Learning:** Bootstrap form validation requires manual addition of `is-invalid` class to inputs when using Blade `@error` directives to ensure `.invalid-feedback` is visible. Also, `aria-describedby` is essential for linking errors to inputs.
**Action:** Always check for `is-invalid` class logic and `aria-describedby` when reviewing or creating Blade forms.
