## 2025-05-14 - Managing focus for smooth-scroll and internal anchors
**Learning:** For accessibility, when using smooth-scroll or internal anchor links (like skip-to-content), focus must be moved to the target element. If the target is non-interactive (like `<main>`), it requires `tabindex="-1"`. However, if the element already has a `tabindex`, it must be preserved. A safe pattern is to only add `tabindex="-1"` if it's missing, and remove it on `blur` only if we added it.
**Action:** Use a conditional check `!targetElement.hasAttribute('tabindex')` before adding and clean up only if added.
