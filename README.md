# AdminPanelTeam1

A web-based admin panel and landing page built using Laravel and Blade templating. This project provides a simple dashboard structure with reusable components and a public landing page without authentication.

---

## Features

* Reusable sidebar component using Blade
* Admin panel layout with modular structure
* Public landing page (no authentication required)
* Clean separation between layout, content, and components
* Simple routing using Laravel named routes

---

## Project Structure

```
resources/views/
│
├── components/
│   └── sidebar-button.blade.php
│
├── contents/
│   ├── dashboard-content.blade.php
│   ├── product-content.blade.php
│   ├── product-category-content.blade.php
│   ├── about-us-content.blade.php
│   └── user-content.blade.php
│
├── layouts/
│   ├── app.blade.php
    ├── landing-page.blade.php
│   └── parts/
│       ├── side-bar.blade.php
│       ├── dashboard.blade.php
│       ├── product.blade.php
│       ├── product-category.blade.php
│       ├── header.blade.php
        ├── about-us.blade.php
│       ├── footer.blade.php
│       └── user.blade.php

│
└── index.blade.php
```

---

## Installation

1. Clone the repository

```
git clone https://github.com/Rifkisyah/MidSemester6Project.git
```

2. Navigate to project directory

```
cd MidSemester6Project
```

3. Install dependencies if not installed

```
composer install
npm install
```
4. Run Migration and Seeder
```
php artisan migrate
php artisan db:seed
```

5. Run development server (all required)

```
npm run dev 
php artisan serve
```
6. Run your Localhost for database access

---

## Usage

### Landing Page

Accessible at:

```
/
```

---

### Admin Pages

Example routes:

```
/dashboard
/users
/products
/categories
```

Each page:

* Uses the main layout (`layouts.app`)
* Includes sidebar automatically
* Loads content from `contents/`

---

## Components

### Sidebar Button

Reusable Blade component:

```blade
<x-sidebar-button type="dashboard">
    Dashboard
</x-sidebar-button>
```

Handles:

* Icon
* Route destination
* Label (via slot)

---

## Layout System

* `layouts.app` → main admin layout
* `layouts.parts.*` → page wrappers
* `contents.*` → page content
* `components.*` → reusable UI

---

## Tech Stack

* Laravel
* Blade Templating
* Tailwind CSS

---

---

## License

This project is open-source and available under the MIT License.
