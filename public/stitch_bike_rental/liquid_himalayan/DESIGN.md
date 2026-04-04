# Design System: Premium Himalayan Adventure

## 1. Overview & Creative North Star
The Creative North Star for this design system is **"The Liquid Summit."** 

This aesthetic moves beyond standard rental templates by blending the rugged, raw power of the Himalayas with a futuristic, high-end editorial finish. We are creating a cinematic digital experience where the interface feels like a precision instrument forged in ice and gold. By utilizing "Liquid Glassmorphism," we break the traditional grid. Layouts should feature intentional asymmetry, overlapping high-fidelity motorcycle photography with translucent panels that feel like they are floating in the thin mountain air.

## 2. Colors
Our palette balances the deep, cold shadows of the Annapurna range with the warmth of a Himalayan sunrise.

*   **Primary Core:** `primary` (#9be9f7) and `on_primary` (#005761). These teal tones represent glacial ice and deep sky.
*   **The Amber Accent:** `secondary` (#feb234) and `tertiary` (#ffc970). Used sparingly for high-action items and "Golden Hour" highlights.
*   **Background Depth:** `surface` (#0e0e13). A rich, charcoal-to-navy foundation that allows glass elements to pop.

### The "No-Line" Rule
**Strict Prohibition:** Do not use 1px solid borders to define sections. 
Boundaries must be defined through background shifts. For example, a `surface_container_low` section should transition into a `surface` section via a subtle 15% gradient or a simple tonal step. Separation is achieved through light, not lines.

### Surface Hierarchy & Nesting
Treat the UI as physical layers of frosted glass.
*   **Base:** `surface` (The foundation).
*   **Secondary Info:** `surface_container_low` (Subtle nesting).
*   **Floating Cards:** `surface_container_high` + Glassmorphism.
Containers should feel "nested." An inner container (like a search input) should always use a tier slightly higher or lower than its parent to create organic depth.

### The "Glass & Gradient" Rule
Floating panels must use the Liquid Glass effect: `rgba(255,255,255,0.07)` with a `backdrop-filter: blur(16px)`. Main CTAs should utilize a "Liquid" gradient from `primary` to `primary_container` to give them a multi-dimensional, shimmering quality.

## 3. Typography
The typography is designed for "Industrial Elegance"—commanding attention while remaining highly legible for technical specs.

*   **Display (Epilogue):** Used for cinematic headlines. It is heavy and authoritative. Large scales (3.5rem+) should be used with tight letter-spacing to mimic premium editorial magazines.
*   **Body (Inter):** The workhorse. Clean and neutral. Use `body-lg` for descriptions of motorcycle specs to ensure a high-end, readable feel.
*   **Labels (Plus Jakarta Sans):** Used for technical metadata (e.g., CC, Weight, Torque). These should be tracked out (letter-spacing: 0.05em) to convey precision.

## 4. Elevation & Depth
In this design system, elevation is a product of light refraction and tonal stacking.

*   **The Layering Principle:** Avoid shadows for static elements. Instead, place a `surface_container_lowest` card on a `surface_container_low` background. This "stacking" creates a soft, natural lift.
*   **Ambient Shadows:** For interactive floating elements (like the "Book Now" drawer), use extra-diffused shadows. 
    *   *Spec:* `box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);` 
    *   The shadow should never be pure black; it should be a deep navy tint of the background color.
*   **The "Ghost Border" Fallback:** If accessibility requires a container edge, use the `outline_variant` at 15% opacity. This creates a "glint" on the glass edge rather than a heavy frame.
*   **Shimmer Effect:** Apply a subtle, moving diagonal gradient mask to glass cards on hover to simulate light hitting a liquid surface.

## 5. Components

### Buttons
*   **Primary:** Liquid gradient (Primary to Primary-Container). Roundedness: `md` (0.75rem). No border. Hover state: 1.05x scale and a soft `secondary` (Amber) outer glow.
*   **Secondary:** Glass-morphic. `surface_variant` at 20% opacity with backdrop-blur. 
*   **Tertiary:** Text-only using `secondary_fixed` color with a 2px underline that expands from the center on hover.

### Input Fields
*   **Search Bar:** Inspired by the "Advanced Booking" in the reference, but elevated. Use a single translucent glass panel.
*   **Style:** No background color; only a `surface_container_high` background. Labels should use `label-md` in `on_surface_variant`. Focus state: Border-bottom glows in `primary`.

### Cards (Motorcycle Listing)
*   **Prohibition:** No divider lines. Use `body-md` spacing to separate the bike name from the price.
*   **Structure:** High-resolution cutout of the bike (e.g., Royal Enfield Himalayan) overlapping the edge of the glass card. This breaks the "box" and creates a 3D effect.

### Selection Chips
*   **Style:** Pill-shaped (`full` roundedness).
*   **Unselected:** `surface_container_highest` with 40% opacity.
*   **Selected:** `secondary` (Amber) with `on_secondary` text. Add a tiny "Electric gold" outer glow.

## 6. Do's and Don'ts

### Do:
*   **Do** use asymmetrical layouts where text blocks are offset from image centers to create an editorial feel.
*   **Do** use "Scroll-Triggered Fades." Elements should glide upward 20px as they enter the viewport.
*   **Do** use high-contrast imagery—dark motorcycles against misty Himalayan backgrounds.

### Don't:
*   **Don't** use 100% opaque white backgrounds for anything. Even "light" sections should use `off-white #F8F9FA` with a subtle texture.
*   **Don't** use standard "Drop Shadows." If it doesn't look like light passing through glass, it doesn't belong.
*   **Don't** crowd the interface. The "Premium Himalayan Adventure" requires "Thin Air"—ample white space (use the `xl` spacing scale between major sections).
*   **Don't** use harsh 90-degree corners. Stick to the `md` (0.75rem) and `lg` (1rem) roundedness scale to keep the "liquid" feel.