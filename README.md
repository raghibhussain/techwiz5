# ✈️ Techwiz5 – Travel Planner & Expense Tracker

Techwiz5 is a full-stack travel planning web application built with **Laravel 11**. Users can plan trips, save destinations, log travel expenses in multiple currencies, and track their budget, while administrators manage destinations, users, trips, and currency exchange rates from a dedicated admin panel.

> Built as a team project for Aptech's TechWiz competition.

---

## ✨ Features

### 👤 User Side
- **Authentication** – register, log in, and log out with server-side validation
- **Profile management** – update profile details, profile picture, and banner image
- **Trip planning** – create, edit, delete, and view trips with dates, destination, budget, and currency
- **Trip status** – mark trips as active or completed
- **Trip filtering** – filter trips by date range and budget
- **Expense tracking** – log expenses (accommodation and activities) per trip, view an expense log, and edit or delete expense slips
- **Multi-currency support** – amounts are converted using admin-defined exchange rates
- **Destinations** – browse, add, edit, and view personal destinations with multiple images
- **Flight details** – store flight number, airline, airports, and times for a trip
- **Search** – search across trips and destinations
- **Notifications** – in-app notification centre
- **Dashboard** – overview of trips and spending

### 🛡️ Admin Panel
- Admin dashboard with an overview of the platform
- Manage **destinations** (add, edit, list)
- View all **trips** across users
- Manage **users** (list and add)
- Manage **currency exchange rates**

### 🌐 Public Website
- Home, About, Contact, and Privacy Policy pages

---

## 🛠️ Tech Stack

| Category | Technology |
| --- | --- |
| Backend | PHP 8.2+, Laravel 11 |
| Database | MySQL (SQLite supported by default config) |
| Templating | Blade |
| Frontend | HTML5, CSS3, JavaScript, jQuery, Bootstrap |
| UI libraries | Font Awesome, DataTables, Owl Carousel, Chartist, jVectorMap, Toast plugin |
| Build tool | Vite (`laravel-vite-plugin`) |
| Testing | PHPUnit |
| Code style | Laravel Pint |
| Dependency managers | Composer, npm |

---

## 🗄️ Database Schema

| Table | Purpose |
| --- | --- |
| `users` | Registered users and admins (name, username, email, phone, images) |
| `destinations` | Destination name, description, location, and up to 4 images |
| `trips` | Trip name, user, destination, start/end date, budget, currency, status |
| `flights` | Flight details linked to a trip |
| `activity_accomodations` | Expenses (type, description, amount, currency) linked to a trip |
| `currency_exchanges` | Base currency, conversion currency, rate, and symbol |
| `notifications` | User notifications |

---

## 📁 Project Structure

```
techwiz5/
├── app/
│   ├── Helpers/            # Currency formatting helper
│   ├── Http/Controllers/
│   │   ├── Admin/          # Dashboard, Destination, Exchange, Trip, User
│   │   ├── AuthController.php
│   │   ├── TripController.php
│   │   ├── ExpenseController.php
│   │   ├── DestinationController.php
│   │   ├── NotificationController.php
│   │   └── SearchController.php
│   ├── Models/             # Eloquent models
│   └── View/Components/    # Navbar components
├── database/
│   ├── migrations/         # Database schema
│   └── seeders/
├── resources/views/        # Blade templates (Auth, Frontend, pages, Admin)
├── routes/web.php          # Web and API-style routes
└── public/                 # Assets and uploads
```

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and npm
- MySQL (e.g. via XAMPP or Laragon)

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/<your-username>/<your-repo-name>.git
cd <your-repo-name>

# 2. Install PHP dependencies
composer install

# 3. Install JavaScript dependencies
npm install

# 4. Create your environment file
cp .env.example .env

# 5. Generate the application key
php artisan key:generate
```

### Configure the database

Create a MySQL database (for example `Techwiz5`), then update these values in your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Techwiz5
DB_USERNAME=root
DB_PASSWORD=
```

### Run migrations and start the app

```bash
# Create the tables
php artisan migrate

# Link the storage folder (if needed)
php artisan storage:link

# Start the Laravel server
php artisan serve

# In a second terminal, start Vite
npm run dev
```

Open `http://127.0.0.1:8000` in your browser.

> **Note:** Add an admin user and some currency exchange rates through the database or admin panel before testing the currency and admin features.

---

## 🔗 Main Routes

| Area | URL |
| --- | --- |
| Home | `/` |
| Login / Register | `/login`, `/register` |
| User dashboard | `/dashboard` |
| Trips | `/trips` |
| Expenses | `/expense` |
| Destinations | `/destination/all` |
| Admin dashboard | `/admin/dashboard` |

---

## 🔮 Future Improvements

- Route protection with middleware for user and admin roles
- Live currency exchange rates from an API
- Trip sharing and collaboration
- Exportable expense reports (PDF/Excel)
- Email notifications and password reset

---

## 📄 License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT) and was created for educational purposes.

---

## 👥 Author

**Raghib**
GitHub: [@your-username](https://github.com/your-username)
