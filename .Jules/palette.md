## 2024-05-24 - Accessibility Patterns in Laravel/Blade
**Learning:** Blade's `@error` directive is convenient but doesn't automatically add the `is-invalid` class required by Bootstrap 5 to show the `.invalid-feedback` div. Without this manual addition, error messages remain hidden in the DOM, failing both sighted users and screen readers (if `aria-describedby` is also missing).
**Action:** Always pair `@error('field')` with a conditional class check `class="@error('field') is-invalid @enderror"` and ensure `aria-describedby` links the input to the error message ID.
