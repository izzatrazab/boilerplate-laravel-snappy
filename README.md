# Boilerplate Laravel Snappy PDF

## About
Minimal Setup for barryvdh/laravel-snappy package. Please note that this boilerplate isn’t meant for production projects. It’s only a quick scaffold for creating PDF templates. I usually hand it to interns when I need some templates made.

## Main Items
1. Laravel Snappy PDF - generate pdf from blade
2. Mailwind - convert tailwind classes to css styles

## Steps to Setup
1. composer install
2. pnpm install (or any node package manager that you use)
3. pnpm install mailwind -g
4. Set up your .env file (you can copy the supplied .env.example) and replace the `SNAPPY_MACHINE` value with your machine type. Check config/snappy to see what’s happening under the hood. I’ve already included wkhtml binaries for several architectures.
5. php artisan migrate
6. php artisan key:generate

By now you should be able to export blade to pdf
