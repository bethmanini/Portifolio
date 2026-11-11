# Elizabeth E. Manini - Personal Portfolio

A modern, responsive, and luxury-grade personal portfolio website created for **Elizabeth E. Manini** (Computer Science Graduate), structured to match **Catherine James' portfolio** (`https://kathryn-jms.github.io/catherine-james-portfolio/`) with the **Burgundy + Soft Pink + Cream + Rose Gold** color palette.

---

## 🎨 Design & Color Palette

- **Burgundy (Deep Backgrounds):** `#18050D`, `#250B16`, `#360E1D`
- **Cream (Headings & Body Typography):** `#FFF8F0`, `#E8D8DF`
- **Rose Gold (Primary Accents & Highlights):** `#D4838F`, `rgba(212, 131, 143, ...)`
- **Soft Pink (Highlights & Badges):** `#F7D6DE`, `#FCE8ED`
- **Typography:** Google Font **Comfortaa** across all headings and content.
- **Interactions:** Custom cursor follower, scroll progress bar, smooth animations, and responsive mobile overlay menu.

---

## 📂 Project Architecture

```text
c:\xampp\htdocs\Portifolio/
├── index.html                      # Main portfolio (exact Catherine James structure)
├── cv.html                         # Dedicated printable CV (Print / Save as PDF)
├── contact.php                     # Optional PHP form handler for XAMPP
├── README.md                       # Project guide
├── css/
│   ├── style.css                   # Okai core stylesheet (Burgundy + Rose Gold theme)
│   └── plugins/
│       ├── bootstrap-grid.css      # Grid layout system
│       └── swiper.min.css          # Swiper slider styles
├── js/
│   ├── main.js                     # Main interaction script
│   └── plugins/
│       ├── gsap.min.js             # GSAP animation engine
│       ├── ScrollSmoother.min.js   # Smooth scrolling plugin
│       ├── ScrollTrigger.min.js    # Scroll animations
│       ├── ScrollTo.min.js         # Scroll-to anchors
│       └── swiper.min.js           # Swiper plugin
├── fonts/
│   ├── css/
│   │   └── font-awesome.min.css    # FontAwesome icon library
│   └── webfonts/                   # Webfont binaries
└── img/
    ├── personal/
    │   ├── profile.png             # Profile avatar (Burgundy & Rose Gold styled)
    │   └── profile.svg             # Vector profile illustration
    └── projects/
        ├── charity-foundation.svg  # Foundation Charity project cover
        ├── password-system.svg     # Password System project cover
        └── tra-practicum.svg       # TRA Practicum project cover
```

---

## 🚀 How to View Locally on XAMPP

1. Open your **XAMPP Control Panel**.
2. Click **Start** on the **Apache** module.
3. Open any browser (Chrome, Edge, Firefox, Brave) and navigate to:
   ```text
   http://localhost/Portifolio/
   ```
4. To view the standalone printable CV:
   ```text
   http://localhost/Portifolio/cv.html
   ```

*(You can also double-click `index.html` to open and view it directly without starting Apache).*

---

## 📸 Changing Your Photo

To use your real photograph:
1. Save your portrait image as `profile.png` inside the `img/personal/` folder.
2. The portfolio will automatically display it.
