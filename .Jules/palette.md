## 2025-12-28 - Bootstrap Form Validation & A11y
**Learning:** Bootstrap 5 validation messages (`.invalid-feedback`) remain hidden unless the input has the `.is-invalid` class. Laravel's `@error` directive alone isn't enough; it must toggle this class.
**Action:** Always pair `@error` with `class="@error('field') is-invalid @enderror"` and link inputs to errors via `aria-describedby` for screen readers.
