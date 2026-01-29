## 2024-12-21 - [Bootstrap 5 Server-Side Validation Pattern]
**Learning:** Bootstrap 5 requires `.is-invalid` class on inputs to show `.invalid-feedback`. Blade's `@error` directive is present but only renders the message; it doesn't automatically add the class.
**Action:** When working on forms, always wrap inputs with `class="form-control @error('field') is-invalid @enderror"` to ensure users actually see the validation messages.
## 2024-05-24 - Accessibility Patterns for Laravel Blade Forms

**Learning:**
Laravel's validation errors in Blade templates require explicit accessibility handling. Simply using `@error` to show a message is insufficient for screen readers. Inputs need the `is-invalid` class to trigger visual cues in Bootstrap, and more importantly, they need `aria-describedby` pointing to the error message's ID so screen readers announce the error immediately when the field is focused.

**Action:**
When implementing forms in Blade:
1. Use `@error('field') is-invalid @enderror` on the input class.
2. Assign a unique ID to the error message container (e.g., `id="email-error"`).
3. Add `@error('field') aria-describedby="email-error" @enderror` to the input.
4. Ensure `value="{{ old('field') }}"` is present to preserve user context.

## 2026-01-29 - [Inconsistent Form Validation Feedback]
**Learning:** While project forms implement partial validation feedback, other admin forms (e.g., Cursos) lack the `.is-invalid` class logic entirely, rendering server-side validation errors invisible to users despite the error message blocks being present in the code.
**Action:** Systematically audit admin forms and apply the standard validation pattern (class toggle + aria-describedby) to ensure consistent user feedback.
