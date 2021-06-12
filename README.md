# Laravel Queue Listen on all queue ( Laravel 5 Package )

## Installation


run the `composer require` command from your terminal:

    composer require wilzokch/laravel-queue-listen-on-all-queue:dev-master

Then in your `config/app.php` add
```php
    Wilzokch\LaravelQueue\QueueServiceProvider::class,
```
in the `providers` array.