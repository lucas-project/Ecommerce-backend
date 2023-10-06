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
Before login, homepage
![scrnli_06_10_2023_12-26-36](https://github.com/lucas-project/Ecommerce-backend/assets/87470079/d12a9bdc-0af6-4e0a-988d-3a5fa924f968)
Login page
![scrnli_06_10_2023_12-27-09](https://github.com/lucas-project/Ecommerce-backend/assets/87470079/4e28a934-e2cb-486a-972a-4711b16841cc)
Products
![scrnli_06_10_2023_12-27-33](https://github.com/lucas-project/Ecommerce-backend/assets/87470079/33e697c1-3690-437c-bd12-9a508079d353)
Search page
![scrnli_06_10_2023_12-27-55](https://github.com/lucas-project/Ecommerce-backend/assets/87470079/447c1c78-d29c-4bd1-980e-a98a65811185)
Search item not exist
![scrnli_06_10_2023_12-28-14](https://github.com/lucas-project/Ecommerce-backend/assets/87470079/128e9018-7c61-4301-b07b-c75d85bc2dfd)
