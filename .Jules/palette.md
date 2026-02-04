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

## 2024-12-21 - [Verification of Blade Templates via Static HTML Mocks]
**Learning:** When the backend environment is unavailable (e.g. PHP version mismatch), we can verify Blade template accessibility improvements by creating a temporary static HTML mock that simulates the "rendered" state (stripping directives and manually injecting error classes). This allows Playwright to verify DOM attributes like `aria-describedby` without running the Laravel app.
**Action:** Use this "Mock & Verify" pattern when backend tests are blocked. Create `tests/verification/mock.html`, run a script, then delete it.

## 2024-12-21 - [Client-Side Validation Complement]
**Learning:** While server-side validation is robust, omitting the `required` attribute on inputs degrades the immediate user experience. Users submit the form only to wait for a reload to see "Required field".
**Action:** Always mirror server-side `required` rules with the HTML `required` attribute for instant browser feedback.
