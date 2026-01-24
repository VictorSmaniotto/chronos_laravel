## 2026-01-24 - Missing Structural and Accessibility Basics in Admin Layout

**Learning:** The admin layout (`resources/views/layouts/admin.blade.php`) was missing the fundamental `<body>` tag, rendering the HTML invalid. Additionally, it lacked a "Skip to content" mechanism, a critical accessibility requirement for keyboard users. This suggests a need to verify basic HTML structure and accessibility tags in layout files before implementing more granular features.

**Action:** Always verify the presence of `<html>`, `<body>`, and `main` (with an ID for skip links) when touching layout files. Ensure "Skip to content" links are standard in all layouts.
