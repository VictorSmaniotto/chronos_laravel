## 2026-01-21 - Missing Skip Links
**Learning:** The application lacks "Skip to content" links, forcing keyboard users to tab through the entire navigation menu on every page load. This is a critical WCAG 2.1 failure (2.4.1 Bypass Blocks).
**Action:** Always verify the presence of skip links in base layouts (`admin.blade.php`, `site.blade.php`) before adding component-level accessibility features.
