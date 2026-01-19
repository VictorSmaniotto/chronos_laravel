## 2024-05-22 - Bootstrap Validation Visibility
**Learning:** Bootstrap 5 forms in this project require the `is-invalid` class on inputs to display `.invalid-feedback` messages. Default Blade `@error` directives alone are insufficient for visual feedback.
**Action:** When working on forms, always wrap inputs with conditional classes: `class="form-control @error('field') is-invalid @enderror"`.
