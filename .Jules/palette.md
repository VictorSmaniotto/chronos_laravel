## 2024-05-23 - [Form Validation Feedback]
**Learning:** Bootstrap 5's `.invalid-feedback` class requires the sibling input to have the `.is-invalid` class (or the parent form to be `.was-validated`) to be visible. Without it, validation error messages rendered in the template are `display: none`.
**Action:** Always ensure inputs have logic to toggle `.is-invalid` when their corresponding error exists in the error bag (e.g., `@error('field') is-invalid @enderror`).
