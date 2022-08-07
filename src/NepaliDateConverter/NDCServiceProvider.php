<?php

namespace Vinus\NepaliDateConverter;

use Illuminate\Support\ServiceProvider;

class NDCServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Vinus\NepaliDateConverter\NDCController');
        $this->app->bind('npdate', function () {
            return new \Vinus\NepaliDateConverter\NDCController();
        });
    }
}