## 2024-05-23 - [Hidden Form Errors]
**Learning:** Bootstrap form validation states rely on the `is-invalid` class on inputs to display the corresponding `.invalid-feedback` div. Without `is-invalid`, error messages rendered by the backend (like Laravel's `$message`) remain hidden (`display: none`), leaving users confused about why submission failed.
**Action:** Always ensure inputs have conditional `is-invalid` classes when error messages are present.
