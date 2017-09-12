<?php

namespace Lyn\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'admin');
        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/admin'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Lyn\Admin\SessionStore',
            'Lyn\Admin\LaravelSessionStore'
        );

        $this->app->singleton('admin', function () {
            return $this->app->make('Lyn\Admin\FlashNotifier');
        });
    }
}
