<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installer
1. Download or clone project

```console
git clone https://github.com/AbdoelMadjid/lcps2024.git
```

2. Go to the folder application using cd
3. Run `composer install` on your cmd or terminal
4. Copy .env.example file to .env on root folder. You can type `copy .env.example .env` if using command prompt Windows or `cp .env.example .env` if using terminal Ubuntu

```console
cp .env.example .env
```

6. Open your .env file and change the database name (DB_DATABASE)

```html
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=
```

7. Run `php artisan key:generate`
8. Run
   
```console
composer dump-autoload
```

8. Clear your config cache

```console
 php artisan optimize:clear
```
or
```console 
 php artisan config:clear
```

9. Run `php artisan migrate --seed`
10. To create a link from the storage directory, run the following command from the project root:

```console 
php artisan storage:link
```

11. Run `npm install`
12. Run `npm run build`

13. Run `php artisan serve` to running your app in browser

_After creating the new permissions use the following commands to update cashed permissions (optional)._

```console
php artisan cache:forget spatie.permission.cache
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
