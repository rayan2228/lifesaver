## how to clone a LARAVEL project

1. Go to the folder application using `cd [your project name]` command on your cmd or terminal or git
2. Run `composer install` on your cmd or terminal or git
3. Copy **_.env.example_** file to **_.env_** on the root folder. You can type `copy .env.example .env` if using command prompt Windows or `cp .env.example .env` if using
   terminal, Ubuntu
4. Open your **.env** file and change the database name **\*(DB_DATABASE)** to whatever you have, username
   **_(DB_USERNAME)_** and password **_(DB_PASSWORD)_** field correspond to your configuration.
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. Run `php artisan serve`
8. Go to `[php artisan serve](http://localhost:8000/)`
