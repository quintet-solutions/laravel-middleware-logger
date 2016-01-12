# Laravel Middleware Logger
Laravel middleware package for logging HTTP requests and responses

Installation
-------------

Add Laravel Middleware Logger as a requirement to composer.json:
```
{
  ...
  "require": {
    ...
    "quintetsolutions/laravelmiddlewarelogger": "dev-master"
    ...
  },
}
```

Update composer:
```
    composer update
```

Add the provider to your config/app.php:
```
  'providers' => [
  
    ...
    
    quintetsolutions\laravelmiddlewarelogger\LaravelMiddlewareLoggerServiceProvider::class,
    
  ],
```

Publish package config:
```
  php artisan vendor:publish --provider="quintetsolutions\laravelmiddlewarelogger\LaravelMiddlewareLoggerServiceProvider"
```

Options
-------------
Following options can be configured in config file laravelmiddlewarelogger.php

enabled      : true or false

file         : name for the log file

log_response : true for logging responses

input_safe   : array of input fields that should not be logged
