## Requirements

-   [NodeJS(NPM)](https://nodejs.org/en/download).
-   [Composer](https://getcomposer.org/download/).
-   [XAMPP](https://www.apachefriends.org/).

### Versions

```
Laravel Framework 10.37.3
PHP Version 8.1
NPM Version 9.8.1
Node.js Version 18.17.1
```

## Before launching.

-   Setup all requirments then open new-portal directory.

## For development

**Install laravel stuff**

```powershell
composer install
```

**Install Node modules**

```powershell
npm install
```

---

Make sure you have installed MySql and its running.

Go into new-portal directory then run:

```powershell
php artisan migrate
```

Then run this:

```powershell
php artisan serve
```

**Run two command line instances!**

First command line

```powershell
php artisan serve
```

Second command line

```powershell
npm run dev
```
