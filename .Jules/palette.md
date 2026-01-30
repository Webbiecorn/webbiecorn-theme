## 2025-05-22 - Focus Management for Internal Anchors
**Learning:** In themes with smooth-scroll JS, internal anchors (like skip-to-content) often fail to move the keyboard focus to the target element, leaving it on the clicked link. This breaks the expected tab order for keyboard and screen reader users.
**Action:** Always call `.focus({ preventScroll: true })` on the target element in smooth-scroll handlers. For non-interactive targets (like <main> or <section>), temporarily set `tabindex="-1"` and remove it on `blur` to maintain a clean tab order.
