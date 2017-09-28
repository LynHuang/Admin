<?php

namespace Lyn\Admin;

use Illuminate\Support\ServiceProvider;
use Lyn\Admin\Admin;

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
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/../Routes/admin.php';
        }

        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/admin'),
            __DIR__ . '/../Controllers' => config('admin.directory'),
            __DIR__ . '/../Routes/admin.php' => base_path('routes/admin.php')
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
