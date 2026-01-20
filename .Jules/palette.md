## 2024-05-22 - Admin Table Actions Accessibility
**Learning:** Admin index tables consistently use icon-only buttons (FontAwesome) for actions (Edit, Delete, View) without `aria-label` attributes, making them inaccessible to screen readers.
**Action:** When creating or modifying admin list views, always ensure action buttons include descriptive `aria-label` attributes (e.g., "Editar projeto", "Excluir usuário").
