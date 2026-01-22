## 2024-05-22 - [Initial Setup]
**Learning:** The project lacks a journal file, so I created one. The project structure is a standard Laravel app with Blade templates.
**Action:** Will document all future critical learnings here.

## 2024-05-22 - [Admin Index Accessibility]
**Learning:** The admin index pages (`projetos`, `usuarios`, `cursos`, `categorias`) use icon-only buttons for actions (Edit, Delete, View) without `aria-label` attributes. This makes them inaccessible to screen reader users who would only hear "link" or "button". Using dynamic data in the label (e.g., "Editar projeto [Nome]") provides necessary context.
**Action:** Always verify icon-only interactive elements for `aria-label`. Use dynamic content in the label where possible for better context.
