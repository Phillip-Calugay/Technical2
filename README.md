# Simple POS System

A CodeIgniter 4 point-of-sale account demo backed by MySQL. Customer and user records are retrieved through CodeIgniter Models and displayed in responsive account tables.

## Pages

- `/` - landing page
- `/about` - project information
- `/customers` - database-backed customer records
- `/users` - database-backed user accounts

## Setup

1. Start Apache and MySQL in XAMPP, then run `composer install` if dependencies are not already installed.
2. The local database connection in `.env` uses the default XAMPP MySQL account (`root` with an empty password). Change it if your account differs.
3. Create and populate the database using either option:
   - Import [database/simple_pos.sql](database/simple_pos.sql) in phpMyAdmin; or
   - Run `php spark migrate` followed by `php spark db:seed PosAccountsSeeder`.
4. Run `php spark serve`, then open `http://localhost:8080`.

The repository includes both the SQL database export and CodeIgniter migration/seeder files for reproducible setup.
