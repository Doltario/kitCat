# Kit cat

A laravel website to share pictures of your favorite animal

## installation

```
$ git clone https://github.com/Doltario/kitCat.git
$ composer install
$ npm install
```
Then create file database/database.sqlite

Create local environment file (.env.local) and add:
```
DB_CONNECTION=sqlite
DB_HOST=path/to/database.sqlite
```

And finally:
```
$ php artisan migrate
```

## Run project

```
$ php artisan serve
$ npm run hot // In an another terminal
```
