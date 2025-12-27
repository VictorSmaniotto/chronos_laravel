# Palette Journal

## 2025-06-21 - Form Validation Feedback Pattern
**Learning:** Forms were using `.invalid-feedback` but missing the conditional `.is-invalid` class on inputs, causing error messages to remain hidden even when validation failed.
**Action:** Always pair `@error('field')` with conditional `is-invalid` class on the input to ensure visibility.
