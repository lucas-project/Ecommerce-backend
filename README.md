This is an ecommerce backend demo
To run the app, change configuration in .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e_backend
DB_USERNAME=root
DB_PASSWORD=
```
Make sure you have the database already when you do the configuration.

Then, install all necessary dependencies with
```
composer install
```

Then, start your server in XAMPP
Now, you should be able to start the server with
```
php artisan serve
```
Hold Ctrl key and click the link in command line, it will take you to the web page.
