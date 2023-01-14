<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1><?php ucwords("how to clone a laravel project from github") ?></h1>
    <ul>
        <li> Clone your project</li>
        <li> Go to the folder application using <b>cd</b> command on your cmd or terminal or git </li>
        <li> Run <b>composer install</b> on your cmd or terminal or git </li>
        <li> Copy <b>.env.example</b> file to <b>.env</b> on the root folder. You can type
            <b>copy .env.example .env </b> if using command prompt Windows or <b>cp .env.example .env</b> if using
            terminal, Ubuntu
        </li>
        <li> Open your <b>.env</b> file and change the database name <b>(DB_DATABASE)</b> to whatever you have, username <b>(DB_USERNAME)</b>
            and password <b>(DB_PASSWORD)</b> field correspond to your configuration.</li>
        <li> Run <b>php artisan key:generate</b></li>
        <li> Run <b>php artisan migrate</b></li>
        <li> Run <b>php artisan serve</b></li>
        <li> Go to <b>http://localhost:8000/</b></li>
    </ul>
</body>

</html>