<?php

namespace smunabo\exitPoppable;

use Illuminate\Support\ServiceProvider;
use smunabo\exitPoppable\Facades\ExitPoppable;

class exitPoppableServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
        require __DIR__.'/routes/routes.php';

        $this->loadViewsFrom(base_path('resources/views'), 'exitPoppable' );

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views'),
        ]);

        $this->publishes([
            __DIR__.'/poppables' => base_path('public/poppables'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('exitpoppable', function(){
            return new \smunabo\exitPoppable\ExitPoppable();
        });
    }
}