# Al Quran API

[![N|Solid](https://img.pngio.com/lumen-logo-api-framework-nordic-apis-lumen-png-558_246.png)](https://lumen.laravel.com)

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)
###### A Simple Al Quran API

## Cofiguration
Add .env file for database connection configuration.

## Instalation
- Import database.sql
- Setup
    - `composer install`
    - `php -S localhost:1337 -t public`

## Documentation
| Method  |  Endpoints  | Usage | Example | Note |
| ------------ | ------------ | ------------ | ------------ | ------------ |
| GET  | /surat/{last}/{next}  | Menampilkan surat berdasarkan jumlah surat   | /surat/1/36 | Menampilkan surat mulai dari 1 sampai 36. |
| GET  |  /ayat/{id_surat}/{last}/{next}  | Menampilkan ayat berdasarkan id surat | /ayat/2/1/10 | Menampilkan surat ke 2 mulai dari ayat 1 sampai 10. |



## Licence
MIT
