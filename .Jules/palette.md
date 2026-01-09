## 2024-05-22 - Missing Skip Link
**Learning:** The application was missing a fundamental accessibility feature: the "Skip to Content" link. Without this, keyboard users must tab through the entire navigation menu on every page load to reach the main content. Bootstrap 5 provides a utility class `visually-hidden-focusable` which makes this easy to implement without custom CSS.

**Action:** Ensure all future layouts include a skip link immediately after the opening `<body>` tag, pointing to the main content container (which must have a corresponding ID, e.g., `id="main-content"`).
