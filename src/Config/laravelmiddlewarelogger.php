<?php
/*
|--------------------------------------------------------------------------
| Laravel Middleware Logger Config
|--------------------------------------------------------------------------
|
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Middleware Logger Options
    |--------------------------------------------------------------------------
    |
    | - enabled      : true or false
    | - file         : name for the log file
    | - log_response : true for logging responses
    | - input_safe   : input fields that should not be logged
    */

    'options' => [
        'enabled'       => true,
        'file'          => storage_path("logs/http.log"),
        'log_response'  => true,
        'input_safe'    => array(
            'password',
            'password_confirmation'
        )
    ]
];