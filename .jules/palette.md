## 2025-05-14 - Keyboard Accessible Navigation Dropdowns
**Learning:** Pure hover-based dropdown menus are inaccessible to keyboard users. Using the CSS `:focus-within` pseudo-class on the parent container allows submenus to remain visible when any of their child links receive focus.
**Action:** Always include `:focus-within` alongside `:hover` for dropdown visibility rules to ensure keyboard accessibility.

## 2025-05-14 - Skip to Content for Accessibility
**Learning:** Websites with complex navigation require a "Skip to Content" link to allow keyboard and screen reader users to bypass repetitive navigation links.
**Action:** Implement a `.skip-link` as the first focusable element in the `<body>`, visually hidden until focused, and targeting the `<main>` element ID.
