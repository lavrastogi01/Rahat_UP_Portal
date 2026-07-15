# 🏛️ RAHAT UP — Complete Project Explanation
### Office of Relief Commissioner, Uttar Pradesh Government Website

---

## 🔭 What Is This Project?

This is the **official website** of the **"Rahat Ayukt" (Relief Commissioner) Office of the Uttar Pradesh Government**. The word **"Rahat" means Relief** in Hindi.

Think of it like this: When a flood, fire, earthquake, or any disaster happens in Uttar Pradesh, this government office is responsible for:
- Sending rescue teams and boats
- Giving money to victims
- Managing disaster alerts
- Coordinating with NGOs and hospitals

This website is the **public-facing digital face** of that entire operation.

---

## 🧰 Tech Stack — What Tools Are Used?

| Technology | What It Does | Simple Analogy |
|---|---|---|
| **PHP** | Backend language — controls logic, includes files | The "glue" that joins all pages together |
| **HTML** | Structure of every page | The skeleton of a webpage |
| **CSS** (Vanilla + Bootstrap 5) | Styling and layout | Clothes and makeup for the skeleton |
| **JavaScript** (Vanilla + jQuery) | Interactive behaviors | The brain that makes things move |
| **Bootstrap 5** | Pre-built responsive grid & components | Ready-made furniture for your house |
| **Font Awesome 6** | Icons (phones, arrows, maps, etc.) | A library of 1000+ tiny pictures |
| **Google Fonts** | Beautiful fonts (Poppins, Roboto, Playfair Display) | Premium text styles from Google |
| **Leaflet.js** | Interactive geographic maps | Google Maps lite, open-source |
| **WOW.js + Animate.css** | Scroll-triggered animations | Elements "pop in" as you scroll |
| **Google Translate API** | English ↔ Hindi translation | Built-in translation switcher |
| **Swiper.js** | Mobile-friendly sliders/carousels | Swipe left/right sliders |
| **jQuery** | Simplified JavaScript operations | JavaScript with shortcuts |

> [!NOTE]
> There is **no database** in this project. All data is **hardcoded directly in PHP/HTML files**. This is a **static government website** — no login system that authenticates users from a real database.

---

## 📁 Project File Structure — Explained Simply

```
new_rahat/
│
├── 📄 index.php              → Homepage (the main page, 7500+ lines!)
├── 📄 header.php             → Top navbar + logo (included in every page)
├── 📄 footer.php             → Bottom links + copyright (included in every page)
│
│── 📄 about.php              → About the office
│── 📄 CommissionersMessage.php → Message from the Commissioner
│── 📄 Introduction (Functions & Objectives).php → Office roles & goals
│── 📄 Organization-Structure.php → Org chart of the office
│── 📄 who.php                → Who's Who (staff directory)
│── 📄 citizen.php            → Citizen Charter (rights of citizens)
│── 📄 citizen_corner.php     → Citizen services corner
│
│── 📄 loginfirst.php         → Login selection page (choose which portal)
│── 📄 loginsecco.php         → Actual login form
│
│── 📄 budget.php             → Disaster Budget Report (allocation/expenditure)
│── 📄 circular.php           → Government circulars & notifications
│── 📄 news_updates.php       → Latest news and updates
│── 📄 gallery.php            → Photo and video gallery
│── 📄 map.php                → Full-screen interactive UP district map
│
│── 📄 ngo.php                → NGO's role in disaster management
│── 📄 registrationngo.php    → NGO registration information
│── 📄 faq.php                → Frequently asked questions
│── 📄 feedback.php           → Public feedback form
│── 📄 contact.php            → Contact information
│── 📄 doanddose.php          → Disaster Do's and Don'ts guide
│── 📄 DDMA.php               → District Disaster Management Plans
│── 📄 gov-order.php          → Government budget release orders
│── 📄 pac.php                → PAC (Police Armed Constabulary) info
│── 📄 track_application.php  → Track application status
│── 📄 sitemap.php            → Site navigation map
│
├── 📁 css/
│   ├── bootstrap.min.css     → Bootstrap framework styles
│   ├── style.css             → Base theme styles
│   ├── custom.css            → Project-specific custom styles
│   └── main.css              → Main page-specific styles (53 KB!)
│
├── 📁 js/
│   ├── script.js             → Main interactive JavaScript logic
│   ├── custom.js             → Custom JS behaviors
│   └── main.js               → Entry-point JS
│
├── 📁 img/                   → All images (banners, photos, officer pics)
└── 📁 lib/                   → External libraries (WOW, Animate, Easing)
```

---

## 🧩 How PHP Include Works — The Core Concept

Every single page in this project starts with:

```php
<?php include('header.php'); ?>
```

And ends with:

```php
<?php include('footer.php'); ?>
```

**Why?** This is smart design:
- Instead of copying the navbar into 30 files → write it **once** in `header.php`
- When you change the header, it updates on **every page automatically**
- Same logic for the footer

```
User visits budget.php
        ↓
PHP reads: include('header.php')  → pastes full HTML navbar here
        ↓
PHP renders budget.php content    → the table with disaster data
        ↓
PHP reads: include('footer.php')  → pastes full HTML footer here
        ↓
Complete page is sent to browser
```

---

## 🏠 Homepage (index.php) — Section by Section

The homepage is the biggest file (7500+ lines). Here's what's inside it, top to bottom:

### 1. 🎞️ Hero Slider Section
- A **big banner at the top** with 3 rotating background images (`ban1.jpg`, `ban2.jpg`, `ban3.jpg`)
- Left/right arrow buttons to navigate manually
- Auto-rotates every **5 seconds** using JavaScript `setInterval`
- **"Quick Links" ticker bar** scrolling at the bottom — links to Relief Portal, Flood Portal, Boat Portal, etc.

### 2. 👥 About Section
- Left side: Text explaining the Relief Commissioner's role
- Right side: **3 overlapping circles with images** (a creative design feature!)
- Animated with WOW.js `fadeInLeft` and `fadeInRight` on scroll

### 3. 🎖️ Officers & Ministers Section
- Cards showing:
  - **CM Yogi Adityanath** (top center, bigger card)
  - **Principal Secretary** (bottom left)
  - **Relief Commissioner** (bottom right)
- Right side: Important portal links

### 4. 📰 Latest Updates & Weather Alerts Section
- **"What's New"** ticker box — news items that auto-scroll vertically
- **"Press Releases"** ticker box — press announcements
- **UP District Map (SVG)** — an interactive clickable map of all 75 districts

### 5. 📊 Disaster Statistics Counters
- Animated number counters (e.g., "15 Lakh+ Beneficiaries")
- Numbers count up from 0 when you scroll to them (using `IntersectionObserver`)

### 6. 🌀 Disaster Type Carousel
- Horizontal sliding cards for disaster types (Flood, Fire, Cold Wave, etc.)
- Auto-plays every 3 seconds, pauses on hover

### 7. 📋 Circulars Section
- Auto-scrolling list of latest government circulars with PDF download links
- Pauses when you hover (mouse-friendly)

---

## 🔑 Login Flow — How It Works

```
User clicks "Login" in Navbar
        ↓
→ Goes to loginfirst.php
  (5 portal cards are shown)
  ┌─────────────────────────────────────┐
  │  Relief Portal (New)                │
  │  Flood Management Portal            │
  │  Boat Management Portal             │
  │  Snakebite Management System        │
  │  Old Portal Login                   │
  └─────────────────────────────────────┘
        ↓
User clicks any "Login to Portal" button
        ↓
→ Goes to loginsecco.php (actual login form)

NOTE: These login cards link OUT to external government portals
(rahat.up.nic.in, boat.uprahat.com, etc.) — the real authentication
happens on the government's server, NOT this website.
```

---

## 💰 Budget Page (budget.php) — Deep Dive

This is one of the most **technically interesting** pages.

### What it shows:
A report of **disaster fund allocation and expenditure** for UP (in ₹ crores)
- How much money was allocated (आवंटित)
- How much was spent (व्यय)
- How much is remaining (शेष)
- How many beneficiaries received help (लाभार्थी)

### Key Feature — Expandable Rows:
Every disaster row has a **+ button**. Click it:
- A sub-table slides open showing **month-by-month breakdown**
- The + turns into a − button
- Click − to collapse it back

```javascript
function toggleNestedRowContainer(button, rowId) {
    const row = document.getElementById(rowId);
    if (row.style.display === "table-row") {
        row.style.display = "none";  // hide
        button.innerText = "+";
    } else {
        row.style.display = "table-row";  // show
        button.innerText = "-";
    }
}
```

### Live Search:
There's a search box — type anything and the table filters in real-time:
```javascript
function filterReportTable() {
    const search = document.getElementById('gridSearchInput').value.toUpperCase();
    // checks each row → shows/hides based on whether text matches
}
```

---

## 🗺️ Map Page (map.php) — Largest File (272 KB!)

This file contains:
- A massive SVG (vector drawing) of **all 75 districts of Uttar Pradesh**
- Each district is a `<polyline>` tag with hundreds of coordinate points
- Districts are color-coded based on weather alerts
- On the homepage, clicking the map opens `map.php` for full detail
- Uses **Leaflet.js** for interactive features (zoom, pan)
- Loads boundary data from a **GeoJSON file** (`up.geojson`)

---

## 🧭 Navigation Menu Structure

```
Header Navbar
├── About Us ▾
│   ├── Introduction (Functions & Objectives)
│   ├── Organization Structure
│   ├── Commissioner's Message
│   ├── Who's Who
│   └── Citizen Charter
│
├── NGO's Corner ▾
│   ├── NGO's Registration
│   └── Role of NGO in Disaster Management
│
├── G.O. & D.D.M.P ▾
│   ├── Government Orders Ex Budget Release
│   ├── बाढ की स्थिति (Login Required)
│   └── District Disaster Management Plan
│
├── Citizen's Corner ▾
│   ├── Citizen's Corner
│   ├── FAQ's
│   └── e-Pass
│
└── Track Application
```

---

## 🎨 CSS Architecture — How Styling Is Organized

| File | Purpose |
|---|---|
| `bootstrap.min.css` | Grid system, utility classes, components base |
| `style.css` | Theme-wide overrides (colors, navbar, buttons) |
| `custom.css` | Project-specific components (cards, tickers, maps) |
| `main.css` | Homepage-specific styles (hero, sliders, counters) |

### Design Choices:
- **Primary color**: Navy blue (`#002f77`, `#0047AB`) — government official look
- **Accent color**: Orange (`#ff5e15`) — for hover effects and highlights
- **Background**: Light gray (`#f4f6f9`) for content pages
- **Font**: Poppins (modern, clean, government-appropriate)
- **Animations**: WOW.js triggers fade-in effects as you scroll down

---

## ⚙️ JavaScript Features Breakdown

| Feature | File | How It Works |
|---|---|---|
| Hero Image Slider | `script.js` | `setInterval` changes background every 5 seconds |
| Disaster Carousel | `script.js` | `translateX` CSS transform to slide cards left/right |
| Animated Counters | `script.js` | `IntersectionObserver` triggers count-up animation |
| Auto-scrolling News | `script.js` | `requestAnimationFrame` continuously scrolls a div |
| Gallery Filter | `script.js` | Shows/hides items by `data-type` attribute |
| Active Navbar Link | `footer.php` | Reads `window.location.pathname` to highlight current page |
| Back to Top Button | `footer.php` | Shows after scrolling 300px, hides above that |
| Language Switcher | `header.php` | Triggers Google Translate API to switch Hindi/English |
| Font Size Control | `header.php` | A+/A/A- buttons change `body.zoom` CSS property |
| Skip to Content | `header.php` | Hides the header with jQuery `.fadeOut()` |
| Budget Table Expand | `budget.php` | Toggles `display:table-row` on nested rows |
| Budget Search | `budget.php` | Filters visible rows with `toUpperCase()` matching |
| Leaflet Map | `script.js` | Loads OpenStreetMap tiles + UP GeoJSON boundary |

---

## 🌐 Accessibility Features

The website has several accessibility (a11y) features built in:

1. **Font Size Controls**: A+ / A / A- buttons in the top bar
2. **Skip to Content**: Link that hides the navbar for screen readers
3. **Language Toggle**: English ↔ Hindi using Google Translate
4. **Emergency Helpline**: `1070` prominently displayed everywhere
5. **Alt Text**: Images have descriptive alt attributes

---

## 📱 Responsive Design

The site uses Bootstrap 5's grid system:

```html
<!-- Example: changes columns on different screen sizes -->
<div class="col-xl-6 col-lg-6 col-md-12 col-12">
```

| Breakpoint | What it means |
|---|---|
| `col-xl-*` | Large desktop (≥1200px) |
| `col-lg-*` | Regular desktop (≥992px) |
| `col-md-*` | Tablet (≥768px) |
| `col-*` | Mobile (any size) |

---

## 🔄 Complete Page Load Flow

```
Browser requests index.php
        ↓
PHP server processes the file
        ↓
PHP includes header.php → HTML head + navbar is added
        ↓
index.php content is rendered → all 7500 lines of HTML
        ↓
PHP includes footer.php → footer links, scripts loaded
        ↓
Browser receives complete HTML
        ↓
Browser downloads CSS files (bootstrap, style, custom, main)
        ↓
Browser downloads JS files (jQuery, Bootstrap JS, script.js, custom.js)
        ↓
JS runs: DOMContentLoaded fires
  → Spinner hides after 100ms
  → Hero slider starts cycling images
  → Auto-scroll for circulars begins
  → IntersectionObserver watches for counters
  → Active nav link is highlighted
  → Back-to-top button logic activated
        ↓
User sees the fully loaded page!
```

---

## 🔗 External Portals Linked

This website acts as a **gateway** to multiple government sub-portals:

| Portal | URL | Purpose |
|---|---|---|
| Relief Portal (New) | `rahat.up.nic.in/core/login` | Main relief management |
| Old Portal | `rahat.up.nic.in/Login.aspx` | Legacy system |
| Flood Management | `rahat.up.nic.in/flood/admin/login` | Flood-specific tracking |
| Boat Management | `boat.uprahat.com` | Rescue boat deployment |
| Snakebite System | `rahat.up.nic.in/sbms/index.php` | Snakebite case management |

---

## 🏗️ Design Credits

- **Designed by**: CMP Techsseract LLP
- **Base Template**: Constra - Building Construction Website Template (HTML Codex)
- **Heavily customized** for the Rahat UP government branding

---

## 📌 Summary in One Paragraph

> This project is a **PHP-based multi-page government website** for the UP Relief Commissioner's Office. Every page shares a common `header.php` (navbar) and `footer.php`. The homepage is the most feature-rich page with a hero slider, interactive SVG district map, live news tickers, animated statistics, and a disaster type carousel — all powered by vanilla JavaScript. The budget page shows real government financial data in an interactive expandable table. The login page acts as a launchpad to 5 external government portals. The entire site is styled with Bootstrap 5, custom CSS, Google Fonts (Poppins), and uses WOW.js for scroll animations. There is no database — all content is hardcoded in PHP/HTML files.

---

*Last analyzed: June 25, 2026 | Project: new_rahat (ApnaCollege Demo)*
