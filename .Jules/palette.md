## 2026-01-27 - Fixing Malformed HTML and Icon-Only Buttons
**Learning:** Invalid HTML structure (specifically unclosed `<tr>` tags in loops) creates a malformed DOM that can confuse screen readers, rendering accessibility attributes like `aria-label` less effective or even ignored. A simple "missing tag" issue can escalate into a major accessibility barrier.
**Action:** Always verify the validity of the HTML structure (nesting, closing tags) alongside adding ARIA attributes. Use tools or simple scripts to check for matching tags in loop structures.
