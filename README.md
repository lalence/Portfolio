# Clarence M. Acuna — Portfolio

## Portfolio Description

A personal portfolio website for Clarence M. Acuna. It presents an introduction, background, education, selected multimedia projects, and contact links in a dark, purple-accented design. The site uses PHP pages with shared components, plus separate CSS and JavaScript files.

## Highlights

- Separate pages for Home, About, Education, Projects, and Contact.
- Shared PHP header, footer, and portfolio data to keep page content consistent.
- Purple-on-dark visual theme with layouts for desktop, tablet, and mobile screens.
- Mobile navigation menu.
- Portrait project images that open in a full-screen preview when clicked.
- Optional project links that open GitHub repositories or hosted project sites in a new tab.
- Downloadable résumé link on the home page.
- Social profile links in the footer and contact page.
- No database required.

## Features

- **Home:** Introduction, featured portfolio overview, skills preview, and contact call to action.
- **About:** Personal introduction and skill overview.
- **Education:** Education and learning timeline.
- **Projects:** Project cards with portrait images, full-screen image previews, and optional external links.
- **Contact:** Social links and email contact.
- **Shared layout:** Reusable navigation and footer included from the `includes/` directory.
- **Cache refresh:** The shared header adds file modification timestamps to CSS and JavaScript URLs so browsers fetch updated files after changes.

Project titles, descriptions, images, and destination URLs are configured in `includes/data.php`. Each project's `link` value can contain a GitHub URL or hosted website URL.

## Requirements

- PHP 7.0 or later. PHP 8.x is recommended.
- A web server capable of serving PHP, such as Apache through XAMPP.
- A modern browser with JavaScript enabled for the mobile menu and project image preview.
- Internet access for the Google Fonts loaded by the site. The site content and layout otherwise use local files.

## Software Needed to Run

### Local development

- XAMPP with Apache and PHP.
- Visual Studio Code or another code editor.
- A modern web browser such as Chrome, Firefox, Edge, or Brave.

### Deployment

- An InfinityFree hosting account and a configured domain or subdomain.
- InfinityFree File Manager or an FTP client such as FileZilla for uploading files.

## How to Run Locally with XAMPP

1. Install and open XAMPP.
2. Place this project folder at `C:\xampp\htdocs\clarPortfolio`.
3. In XAMPP Control Panel, start **Apache**. MySQL is not needed for this portfolio.
4. Open `http://localhost/clarPortfolio/` in a browser. XAMPP will load `index.php` automatically.

If Apache uses a different document root on your computer, place the folder inside that document root and adjust the local URL to match.

## How to Deploy to InfinityFree

1. Create or select your InfinityFree hosting account and domain/subdomain.
2. Open the document-root folder assigned to the domain. It is commonly named `htdocs`; additional domains may have their own `htdocs` folder.
3. Upload the **contents** of this project folder directly into that document root. Do not put the site files inside an extra `clarPortfolio` subfolder unless you want the site to load from a subpath.
4. Confirm that `index.php` is directly inside the document root, alongside the other PHP pages and the `css/`, `js/`, `includes/`, and `assets/` folders.
5. Visit your domain and check that images and links load. Hosting servers are case-sensitive, so filenames and paths must match exactly.

## Project Structure / Folder Guide

```text
clarPortfolio/
├── index.php                 # Home page and default entry point
├── about.php                 # About page
├── education.php             # Education and learning timeline
├── projects.php              # Project gallery and image preview
├── contact.php               # Contact details and social links
├── css/
│   └── style.css              # Site-wide styles and responsive layouts
├── js/
│   └── main.js                # Mobile navigation and project image preview
├── includes/
│   ├── data.php               # Shared portfolio content and project links
│   ├── header.php             # Shared document head and navigation
│   └── footer.php             # Shared footer and social links
└── assets/
    ├── files/                 # Résumé and other downloadable files
    └── images/
        └── projects/          # Project images used by the gallery
```

Keep the image paths in `includes/data.php` aligned with the actual filenames under `assets/images/`. To add a project destination, replace that project's empty `link` value with a complete URL, for example `https://github.com/username/repository`.

## Development Tools and Applications

- **PHP** for page templates, shared includes, and project data.
- **HTML5** for page structure and accessible controls.
- **CSS3** for styling, responsive layouts, and the image preview presentation.
- **JavaScript (vanilla)** for the mobile menu and full-screen project image previews.
- **XAMPP / Apache** for local PHP hosting.
- **Visual Studio Code** for editing project files.
- **Web browser** for viewing the site during development.
- **InfinityFree File Manager or FTP** for deployment.
