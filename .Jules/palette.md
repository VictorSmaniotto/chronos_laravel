## 2024-05-23 - Login Form Accessibility
**Learning:** Bootstrap 5 validation states (`.is-invalid`) are not automatically applied by Laravel's `@error` directive.
**Action:** Always manually add `@error('field') is-invalid @enderror` to input classes and link error messages with `aria-describedby` for screen readers.
