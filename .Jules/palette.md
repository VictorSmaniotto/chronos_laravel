## 2024-05-22 - Admin Action Buttons Accessibility
**Learning:** The standard admin table action buttons (View, Edit, Delete) are implemented as icon-only links/buttons without `aria-label` or screen-reader text, making them inaccessible.
**Action:** Always add `aria-label="[Action Name] [Resource Name]"` (e.g., "Editar projeto") to these buttons when touching admin views.
