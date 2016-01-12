<?php

namespace quintetsolutions\laravelmiddlewarelogger;

use Illuminate\Support\ServiceProvider;

class LaravelMiddlewareLoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/laravelmiddlewarelogger.php' => config_path('laravelmiddlewarelogger.php'),
        ]);
        $this->app->make('Illuminate\Contracts\Http\Kernel')
            ->pushMiddleware('quintetsolutions\laravelmiddlewarelogger\Http\Middleware\LogAfterRequest');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/laravelmiddlewarelogger.php', 'laravelmiddlewarelogger'
        );
    }
}
