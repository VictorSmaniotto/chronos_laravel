## 2024-05-23 - Missing Bootstrap Validation Classes
**Learning:** Bootstrap form validation in this codebase requires the manual addition of the `is-invalid` class to inputs (using Blade `@error` directives) to ensure `.invalid-feedback` error messages are visible.
**Action:** Always check for `@error` directives paired with `is-invalid` classes when working on forms.
