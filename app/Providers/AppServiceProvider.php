<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // spl_autoload_register(function ($class) {
        //   //  $class = strtolower($class);
        //     $className = 'App/Includes/' .$class . '.php';
        //     include_once($className);
        // });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
