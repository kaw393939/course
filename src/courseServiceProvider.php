<?php

namespace kaw393939\course;

use Illuminate\Support\ServiceProvider;
use Laratrust\LaratrustServiceProvider;

class courseServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->register(LaratrustServiceProvider::class);

        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'kaw393939');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'kaw393939');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
           $this->loadRoutesFrom(__DIR__.'/Routes/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/course.php', 'course');

        // Register the service the package provides.
        $this->app->singleton('course', function ($app) {
            return new course;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['course'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/course.php' => config_path('course.php'),
        ], 'course.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/kaw393939'),
        ], 'course.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/kaw393939'),
        ], 'course.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/kaw393939'),
        ], 'course.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
