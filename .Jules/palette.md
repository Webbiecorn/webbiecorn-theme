## 2025-05-15 - Focus Management for Internal Anchors
**Learning:** For a smooth and accessible user experience, internal anchor links (like "Skip to content") must move keyboard focus to the target element. Without JS focus management, the viewport moves but focus remains on the clicked link, confusing keyboard and screen reader users.
**Action:** Always implement focus management when using smooth-scroll JS. For non-interactive targets, use a temporary `tabindex="-1"` and `.focus({ preventScroll: true })`.
