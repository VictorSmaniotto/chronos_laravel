## 2024-05-24 - Accessibility Patterns for Laravel Blade Forms

**Learning:**
Laravel's validation errors in Blade templates require explicit accessibility handling. Simply using `@error` to show a message is insufficient for screen readers. Inputs need the `is-invalid` class to trigger visual cues in Bootstrap, and more importantly, they need `aria-describedby` pointing to the error message's ID so screen readers announce the error immediately when the field is focused.

**Action:**
When implementing forms in Blade:
1. Use `@error('field') is-invalid @enderror` on the input class.
2. Assign a unique ID to the error message container (e.g., `id="email-error"`).
3. Add `@error('field') aria-describedby="email-error" @enderror` to the input.
4. Ensure `value="{{ old('field') }}"` is present to preserve user context.
