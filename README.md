<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

Jalankan perintah ini di terminal

```bash
# copy env file
cp .env.example .env
composer install
# install dependency js
npm install
# jalankan migrasi dan seeder
php artisan migrate:refresh --seed
# generate ulang shield
npm run build
```

Saat proses development selalu jalankan perintah ini, dan biarkan tetap berjalan

```bash
./vendor/bin/sail npm run dev
```

dan pada terminal lain jalankan

```bash
php artisan serve
```

## Access

Home page dapat diakses pada :

-   Web: [http://localhost:8000](http://localhost:8000)
-   Admin : [http://localhost:8000/admin](http://localhost:8000/admin)

Gunakan akun ini untuk akses admin panel :

-   role: `admin`
    email: `admin@example.com`
    password `password`
-   role: `staff`
    email: `staff@example.com`
    password `password`
-   role: `user`
    email: `test@example.com`
    password `password`
