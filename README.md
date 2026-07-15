<div align="center">
  <h1>🏛️ RAHAT UP — Relief Commissioner Office Website</h1>
  
  <p>
    <strong>The Official Digital Face of the "Rahat Ayukt" (Relief Commissioner) Office of the Uttar Pradesh Government.</strong>
  </p>

  <div>
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
    <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
    <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
    <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap" />
    <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
    <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" alt="jQuery" />
  </div>

  <br />
</div>

## 📖 Table of Contents
- [About the Project](#-about-the-project)
- [Key Features](#-key-features)
- [Tech Stack](#-tech-stack)
- [Folder Structure](#-folder-structure)
- [Getting Started](#-getting-started)
- [Usage](#-usage)
- [Contributing](#-contributing)
- [License](#-license)

---

## 🔭 About the Project

When a disaster strikes in Uttar Pradesh, the Relief Commissioner's office is responsible for coordinating rescue operations, managing disaster alerts, distributing financial aid, and working alongside NGOs and hospitals. 

**"Rahat"** translates to **Relief** in Hindi. This website acts as a centralized information hub for all public-facing disaster management activities, serving millions of citizens across 75 districts. 

> **Note:** This is a static government website designed without a complex backend database. All data routing and templating are intelligently managed through PHP includes and hardcoded content structures.

---

## 🌟 Key Features

- **🌐 Multi-lingual Support**: Built-in English ↔ Hindi translation powered by the Google Translate API.
- **🗺️ Interactive UP Map**: A massive, full-screen interactive vector map of all 75 UP districts powered by Leaflet.js, color-coded based on weather alerts.
- **📊 Real-time Disaster Budgets**: Interactive, expandable tables showing detailed disaster fund allocation and expenditure (in ₹ crores) with live search capabilities.
- **📰 Live Updates & Circulars**: Auto-scrolling news tickers and government circular notifications.
- **🌀 Disaster Resource Hub**: Dedicated sections for different disaster types, citizen charters, and a comprehensive "Do's and Don'ts" guide.
- **🔐 Portal Gateway**: Serves as a unified login launchpad to 5 external critical government systems (Relief Portal, Flood Management, Boat Management, etc.).
- **♿ Accessibility (a11y)**: Features including font-size controls (A+, A, A-), skip-to-content links for screen readers, and clear emergency helpline numbers (1070).

---

## 🧰 Tech Stack

| Component | Technology | Description |
|---|---|---|
| **Core Logic** | PHP | Template engine logic and reusable components (header/footer includes). |
| **Structure** | HTML5 | Semantic structure of the application. |
| **Styling** | CSS3 & Bootstrap 5 | Responsive layout, grid system, and pre-built UI components. |
| **Interactivity** | Vanilla JS & jQuery | DOM manipulation, AJAX-like behaviors, and scroll logic. |
| **Mapping** | Leaflet.js | Interactive geographic maps rendering GeoJSON boundary data. |
| **Animations** | WOW.js + Animate.css | Scroll-triggered animations for a modern feel. |
| **Carousels** | Swiper.js | Mobile-friendly, touch-enabled carousels and sliders. |
| **Assets** | Font Awesome 6, Google Fonts | Clean iconography and typography (Poppins, Roboto). |

---

## 📁 Folder Structure

```text
new_rahat/
│
├── index.php              # Main Homepage (7500+ lines, the core of the site)
├── header.php             # Global Navbar (Included in every page)
├── footer.php             # Global Footer (Included in every page)
│
├── about.php              # About the Relief Commissioner's office
├── budget.php             # Disaster Budget Report (Expenditure tracking)
├── map.php                # Interactive UP District Map
├── loginfirst.php         # Gateway selection page for external portals
│
├── css/                   # Stylesheets (Bootstrap, custom themes, main styles)
├── js/                    # JavaScript logic (Sliders, counters, UI interactions)
├── img/                   # Static assets (Banners, portraits, icons)
└── lib/                   # External dependencies (WOW.js, Animate, Easing)
```

---

## 🚀 Getting Started

Follow these steps to set up the project locally on your machine.

### Prerequisites

Since this project utilizes PHP for includes and basic templating, it cannot be run directly via the `file://` protocol in your browser. You need a local PHP server environment:
- Windows: [XAMPP](https://www.apachefriends.org/index.html) or WAMP
- Mac: [MAMP](https://www.mamp.info/) or [XAMPP for Mac](https://www.apachefriends.org/index.html)
- Linux: LAMP stack

### Installation

1. **Clone the repository**
   ```sh
   git clone https://github.com/lavrastogi01/Rahat_UP_Portal.git
   ```
2. **Move to your server directory**
   - **XAMPP (Windows)**: Move the folder to `C:\xampp\htdocs\rahat-up`
   - **MAMP (Mac)**: Move the folder to `/Applications/MAMP/htdocs/rahat-up`
3. **Start your local server** 
   - Open your control panel (XAMPP/MAMP) and start **Apache**.
4. **Open in Browser**
   - Navigate to `http://localhost/rahat-up`

*(Alternatively, if you have PHP installed globally via command line, navigate to the folder in your terminal and run `php -S localhost:8000`, then visit `http://localhost:8000`)*

---

## 💻 Usage

Once running locally, you can:
- Navigate to the **Budget Dashboard** (`budget.php`) to view the interactive table.
- Test the **Multi-language toggle** in the header.
- View the **Interactive UP Map** (`map.php`) to see the Leaflet.js integration.
- Observe the **PHP Includes logic** in action—if you change something in `header.php`, it reflects across all 30+ pages instantly!

---

## 🤝 Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

Distributed under the MIT License. See `LICENSE` for more information.

---
*Base Template designed by HTML Codex, heavily customized for the Rahat UP Government requirements.*
