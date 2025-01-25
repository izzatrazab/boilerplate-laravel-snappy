# Boilerplate Laravel Snappy PDF

## About
Minimal Setup for barryvdh/laravel-snappy package.

## Main Items
1. Laravel Snappy PDF - generate pdf from blade
2. Mailwind - convert tailwind classes to css styles

## Steps to Setup
1. composer install
2. pnpm install (or any node package manager that you use)
3. pnpm install mailwind -g
4. setup your .env file (you can copy env.example file provided)
5. php artisan migrate
6. php artisan key:generate
7. go to snappy config file, pick wkhtmltopdf path according to your machine
By now you should be able to export blade to pdf