## 2025-05-14 - Skip link focus management
**Learning:** Adding a skip-to-content link is only half the battle; without explicit focus management in JavaScript (especially when using smooth-scroll), the keyboard focus often remains on the skip link itself, frustrating the user's intent to jump to the content.
**Action:** Always pair internal anchor links with a focus management script that moves focus to the target element and handles `tabindex` for non-interactive targets.
