## 2024-05-23 - [Invisible Form Errors Pattern]
**Learning:** Bootstrap 5 validation states (`.invalid-feedback`) require the `.is-invalid` class on the sibling input to be visible. Simply adding the error message div is insufficient and leads to "invisible" errors where the form fails silently.
**Action:** Always verify that inputs have `@error('field') is-invalid @enderror` when adding validation feedback. Use `aria-describedby` to programmatically link the input to the error message for screen readers.
