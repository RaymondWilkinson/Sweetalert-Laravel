<?php

namespace RaymondWilkinson\SweetalertLaravel;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishFiles();
        $this->loadViewsFrom(__DIR__.'/Views', 'Alerts');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/helpers.php';

    }

     /**
     * Publish static files.
     */
    protected function publishFiles()
    {
        $this->publishes([
            __DIR__.'/static/sweetalert.css' => public_path('css/sweetalert.css'),
            __DIR__.'/static/sweetalert.min.js' => public_path('js/sweetalert.min.js'),
        ], 'alerts');
    }
}
