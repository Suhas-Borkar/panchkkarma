# Project Summary

## Project Overview

This project is a PHP CodeIgniter 3 website for "6 Panchkarma & Wellness", an Ayurvedic wellness and Panchakarma treatment center. The site is currently structured as a mostly static marketing/content website, with CodeIgniter controllers and routes used to render shared layouts and individual content pages.

The main user-facing content focuses on Ayurvedic treatments, wellness services, center information, treatment benefits, FAQs, and location/contact-oriented footer content.

## Technology Stack

- Backend framework: CodeIgniter 3
- Language: PHP
- Frontend: HTML, CSS, JavaScript
- Styling framework: Bootstrap
- Frontend libraries/assets:
  - jQuery
  - Swiper
  - Fancybox
  - WOW.js
  - GSAP
  - MeanMenu
  - Font Awesome
  - Nice Select
  - jQuery UI
- Database: Config file exists, but no active database credentials or model usage were found
- Composer: Present, but only framework-level CodeIgniter dependencies are defined

## Main Folder Structure

- `application/controllers/`
  - Contains CodeIgniter controllers for the website.
  - Current controllers include `Website.php`, `Treatments.php`, and the default `Welcome.php`.

- `application/views/common/`
  - Shared site layout files.
  - `header.php` contains the main navigation and mega menu.
  - `footer.php` contains footer links, business links, treatment links, center locations, social links, and scripts.

- `application/views/website/`
  - Contains the home page view.
  - Current file found: `index.php`.

- `application/views/treatments/`
  - Contains individual Ayurvedic treatment detail pages.
  - Current treatment pages include Agnikarma, Anuvasana Basti, Dhum Paan, Greeva Basti, Hrudbasti, Ksheerdhara, Lekhan Basti, Nadi Swedan, Nasya, Navarakizhi, and Netra Terpana.

- `application/config/`
  - Standard CodeIgniter configuration.
  - Important files include `routes.php`, `config.php`, `autoload.php`, and `database.php`.

- `uploads/assets/`
  - Main public asset directory used by the live views.
  - Contains CSS, JavaScript, logos, images, fonts, banners, treatment images, gallery images, and theme assets.

- `demo/`
  - Appears to contain the original HTML theme/demo templates and assets.
  - Useful as a reference source, but separate from the active CodeIgniter views.

- `system/`
  - CodeIgniter framework core files.

## Routing

The default controller is:

```php
$route['default_controller'] = 'Website';
```

Primary routes currently include:

- `/` -> `Website/index`
- `/about-us` -> `Website/about_us`
- `/contact-us` -> `Website/contact_us`

Treatment routes include:

- `/treatments/agnikarma-treatment`
- `/treatments/anuvasana-basti-treatment`
- `/treatments/dhum-paan-treatment`
- `/treatments/greeva-basti-treatment`
- `/treatments/hrudbasti-treatment`
- `/treatments/ksheerdhara-treatment`
- `/treatments/lekan-basti-treatment`
- `/treatments/nadi-swedan-treatment`
- `/treatments/nasya-treatment`
- `/treatments/navarakizhi-treatment`
- `/treatments/netra-terpana-treatment`
- `/treatments/niruha-basti`

## Controllers

### `Website.php`

Handles general website pages.

- Loads shared header and footer through a helper method named `views()`.
- Renders the home page through `index()`.
- Defines `about_us()` and `contact_us()` methods.

Current note: `about_us()` and `contact_us()` expect `application/views/website/about-us.php` and `application/views/website/contact-us.php`, but those files were not found during review.

### `Treatments.php`

Handles treatment detail pages.

- Uses the same shared layout pattern as `Website.php`.
- Loads views from `application/views/treatments/`.
- Sets a simple page title per treatment.

Current treatment methods include:

- `agnikarma_treatment()`
- `anuvasana_basti_treatment()`
- `dhum_paan_treatment()`
- `greeva_basti_treatment()`
- `hrudbasti_treatment()`
- `ksheerdhara_treatment()`
- `lekan_basti_treatment()`
- `nadi_swedan_treatment()`
- `nasya_treatment()`
- `navarakizhi_treatment()`
- `netra_terpana_treatment()`
- `niruha_basti_treatments()`

Current note: `niruha_basti_treatments()` expects a `niruha-basti-treatment.php` view, but that view was not found.

## Frontend and Content

The site uses a theme-style frontend with rich visual sections:

- Video hero/banner on the home page
- About section
- Treatment/service sections
- Gallery
- Brand carousel
- Blog/news teaser cards
- Instagram carousel
- Mega menus for treatment navigation
- Footer with business links, health packages, disease-wise treatments, signature treatments, therapies, and Mumbai center locations

Treatment detail pages follow a consistent layout:

- Page title banner
- Breadcrumb
- Left sidebar treatment navigation
- Help/contact box
- Main treatment image
- Service overview
- Procedure and Ayurvedic explanation
- Conditions where the therapy is helpful
- Benefits grid with icons
- FAQ accordion

## Current Project State

The Git worktree currently shows pending changes and new files related to treatments:

- Modified:
  - `application/config/routes.php`
  - `application/controllers/Treatments.php`
  - `application/views/treatments/ksheerdhara-treatment.php`

- New/untracked:
  - `application/views/treatments/lekhan-basti-treatment.php`
  - `application/views/treatments/nadi-swedan-treatment.php`
  - `application/views/treatments/nasya-treatment.php`
  - `application/views/treatments/navarakizhi-treatment.php`
  - `application/views/treatments/netra-terpana-treatment.php`
  - `uploads/assets/images/navarakizhi/`
  - `uploads/assets/images/netra-terpana/`

## Observations and Risks

- Several menu links point to routes/pages that do not appear to exist yet, such as Janu Basti, Kati Basti, Pada Abhyanga, Pichu, Shirodhara, Vaman, Virechan, and others.
- The route uses `lekan-basti-treatment`, while the view and title use `lekhan-basti-treatment`. This spelling mismatch may be intentional for URL compatibility, but it is worth standardizing.
- The header and footer contain some mojibake/encoding artifacts in comments and text, likely from copied special characters.
- The home page still contains some generic theme copy such as "Beauty Services", spa/news placeholder text, and demo links like `page-about.html` and `news-details.html`.
- Database configuration exists but appears unused and unconfigured.
- CSRF protection is disabled in `application/config/config.php`. This may be acceptable for static pages, but should be revisited before adding forms.
- `error_reporting(0)` is set in controllers, which can hide development errors.
- `base_url` is forced to `https://`, which may cause issues in local XAMPP development if HTTPS is not configured.

## Suggested Next Steps

1. Create missing views for `about-us`, `contact-us`, and any treatment routes already present in menus.
2. Standardize treatment URL slugs and method names, especially `lekan` vs `lekhan`.
3. Replace remaining theme/demo copy with final 6 Panchkarma & Wellness content.
4. Update placeholder links in header, footer, home page, and treatment sidebars.
5. Clean encoding artifacts in shared layout files.
6. Consider moving repeated treatment sidebar data into a shared partial or config array.
7. Enable safer development settings by avoiding `error_reporting(0)` during local work.
8. Configure forms, CSRF, and database only when dynamic features are added.

