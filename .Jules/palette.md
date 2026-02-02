## 2026-02-02 - Skip Link Visibility
**Learning:** When using .screen-reader-text utility classes that use clip and clip-path for accessible hiding, revealing the element on focus (e.g., for skip links) requires explicitly overriding both 'clip: auto' and 'clip-path: none' in the :focus state.
**Action:** Always include 'clip: auto' and 'clip-path: none' in .skip-link:focus or similar focus-reveal patterns.
