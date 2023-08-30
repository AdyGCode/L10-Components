# Laravel Component Demo

## Setting up

- Open Heidi/Beaver/PhpMyAdmin
- Create a new database "laravel"
- for this example we will use the 'root' user

- Open the (Laragon) terminal
- Create a new CMDR session (CTRL + T)
- use the Source\Repos folder
- `cd %userprofile%\Source\Repos`

- Create the new laravel app
- `composer create laravel\laravel L10-Components`
- `cd L10-Components`
- `composer require laravel\breeze`
- `php artisan breeze:install blade --pest --dark`
- `php artisan migrate`
- `npm install && npm run dev`
- Create a new CMDR tab (CTRL+T)
- It should be in the correct folder automatically

- Create an alert component
- `php artisan make:component Alert`
- files:
  - `app\View\Component\Alert.php`
  - `resources\views\components\alert.blade.php`
- Open the new project in PhpStorm
- 
