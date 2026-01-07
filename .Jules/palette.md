## 2024-05-22 - Form Accessibility Patterns
**Learning:** Standard Blade form components often miss HTML5 validation and accessibility attributes (`required`, `autocomplete`, `aria-describedby`), relying solely on backend validation visuals. This creates a poor experience for screen reader users and those with cognitive disabilities.
**Action:** Ensure all form inputs include `required` for client-side feedback, proper `autocomplete` tokens, and link server-side errors to inputs using `aria-describedby` within the `@error` directive.
