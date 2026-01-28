## 2026-01-28 - Missing Base HTML Tags in Layouts
**Learning:** Found that `admin.blade.php` layout was missing the opening `<body>` tag. This fundamental omission risks invalid rendering and complicates the injection of `<body>`-relative elements like skip links.
**Action:** Always inspect the base HTML structure (`<html>`, `<body>`, `<main>`) of layout files in this project before implementing accessibility features.
