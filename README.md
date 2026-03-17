# Brocket — Tournament Bracket Manager

A web application for creating and managing tournament brackets. Organizers can create tournaments, manage participants, auto-generate randomized brackets, and track results including medal standings and podium rankings. Built as a university team project.

![Laravel](https://img.shields.io/badge/Laravel-8.x-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.3%2B-777BB4?logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-3.x-06B6D4?logo=tailwind-css&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-2.x-FB70A9?logo=laravel&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

---

## Features

- **Tournament Management** — Create and manage multiple tournaments from a personal dashboard
- **Bracket Generation** — Automatically generate randomized brackets from registered participants
- **Member Management** — Add, edit, and remove tournament participants
- **Podium & Medal Tracking** — Record gold, silver, and bronze placements
- **Public Bracket View** — Share tournament brackets and podium results via public links (no login required)
- **User Authentication** — Secure login/signup with email verification and 2FA via Laravel Jetstream
- **Team Collaboration** — Multi-user team support with invitation system
- **Email Notifications** — Contact form and subscription email support

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | Laravel 8.x, PHP 7.3+ |
| Frontend | Tailwind CSS 3, Alpine.js, Blade |
| Auth | Laravel Jetstream, Laravel Sanctum |
| Reactive | Laravel Livewire 2 |
| Database | MySQL |
| Email | Laravel Mail |
| Build | Laravel Mix (Webpack) |

## Requirements

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

## Installation

### 1. Clone & Install Dependencies

```bash
git clone https://github.com/miftahfaridhh/brocket.git
cd brocket
composer install
npm install
```

### 2. Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=brocket
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Run Migrations

```bash
php artisan migrate
```

### 4. Build Assets & Serve

```bash
npm run dev
php artisan serve
```

Open `http://localhost:8000` in your browser.

## Usage

1. Register an account and log in
2. From the **Dashboard**, create a new tournament
3. Add participants to your tournament
4. Click **Generate Bracket** to randomize matchups
5. Record match results and assign medals
6. Share the public bracket link with participants

## Database Schema

| Table | Description |
|---|---|
| `users` | Registered users |
| `teams` | Team management (Jetstream) |
| `turnamen` | Tournament records |
| `member` | Participant records |
| `turnamenMember` | Tournament-participant relationships |
| `email` / `subscribe` | Contact form submissions and email subscriptions |

## Project Structure

```
app/
├── Http/Controllers/
│   ├── BracketController.php  # Tournament creation & bracket generation
│   ├── ShowController.php     # Display brackets & podium
│   ├── PagesController.php    # Static pages
│   └── MailController.php     # Email handling
├── Models/
│   ├── turnamen.php           # Tournament model
│   ├── member.php             # Participant model
│   └── turnamenMember.php     # Tournament-participant relationship
resources/views/
├── pages/                     # Landing, bracket, podium views
└── layouts/                   # Shared layouts
```

## Team

This project was developed as a university assignment by:

- Bryan Dario Lesmana
- Muhammad Miftah Faridh
- Suryanegara
- Aditya Ghalib Hendryan
- Yogie Wisesa
- Muhamad Fadil Hafiz
- Nisrina Athallah

## Security

**Never commit credentials to this repository.** The following are ignored via `.gitignore`:

| Path | Description |
|---|---|
| `.env` | Database credentials and application secrets |
| `*service_account*.json` | Cloud service account key files |
| `*credentials*.json` | Any credentials JSON file |

Use `.env.example` as the template and fill in your own values locally.

## License

This project is open-sourced under the [MIT License](LICENSE).
