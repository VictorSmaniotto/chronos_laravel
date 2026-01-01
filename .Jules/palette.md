## 2024-05-22 - [Bootstrap Form Validation in Blade]
**Learning:** Bootstrap's `.invalid-feedback` class requires the sibling input to have `.is-invalid` to be visible. In Blade, this means we must explicitly add this class using `@error('field') is-invalid @enderror`. Without this, server-side validation messages are hidden from the user, causing frustration.
**Action:** When implementing forms with Bootstrap in Laravel, always conditionally apply `.is-invalid` to inputs and link the error message with `aria-describedby` for accessibility.
