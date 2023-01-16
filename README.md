### Installation

- Change directory (cd) to application root directory
- Create env from .env.example file. Run `cp .env.example .env`
- Run `composer install`
- Run `php artisan key:gen`
- Run `./vendor/bin/sail up -d`
- Run migrations and seeder `./vendor/bin/sail artisan migrate:fresh --seed`
- Visit http://localhost:1111/
