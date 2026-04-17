# AgriGuide

AgriGuide is an agricultural guidance web application built with **PHP / Laravel**, designed to help farmers with crop advice, planting schedules, and useful agricultural resources.

## Features

- Browse crops, categories, and care guides
- Personalized recommendations based on user input
- Articles and resources for farming best practices
- Admin area for managing crops, articles, and content
- Built with a clean MVC architecture

## Tech Stack

- **Backend:** Laravel, PHP 8.x
- **Database:** MySQL
- **Frontend:** Blade templates, HTML, CSS
- **Auth:** Laravel built-in authentication

## Requirements

- PHP >= 8.0
- Composer
- MySQL >= 5.7
- Node.js & npm

## Installation

```bash
# 1. Clone the repository
git clone https://github.com/MostafaMosaad3/AgriGuide.git
cd AgriGuide

# 2. Install dependencies
composer install
npm install && npm run build

# 3. Configure environment
cp .env.example .env
php artisan key:generate

# 4. Set DB credentials in .env, then:
php artisan migrate --seed
php artisan storage:link

# 5. Serve the application
php artisan serve
```

## Project Status

AgriGuide started as a graduation / learning project and is open for further contributions and improvements.

## License

This project is released under the MIT License.

---

Built by [Mostafa Mosaad](https://github.com/MostafaMosaad3)
