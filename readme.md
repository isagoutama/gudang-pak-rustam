<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Deskripsi

Ini adalah aplikasi gudang sederhana yang dibuat menggunakan Framework Laravel 5.6.29. Untuk melihat requirements dari laravel versi tersebut silahkan di dukumentasi laravel, linknya : https://laravel.com/docs/5.7#server-requirements.

Di dalam aplikasi ini hanya crud sederhana dengan relationship One To One, One to Many, dan One To Many(reverse). Cocok untuk belajar. Untuk UI/Tampilan saya menggunakan bootstrap v4.

## Clone Project

git clone https://github.com/isagoutama/gudang-pak-rustam.git

## Setup
### buka terminal dan ketik perintah dibawah ini :

cd $DIRECTORY_TO/gudang-pak-rustam

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate --seed

php artisan serve

## Catatan

untuk login, akunnya bisa dilihat di seeder UsersTableSeeder

btw, pak rustam itu nama staff di sekolah saya bagian gudang
