<?php

namespace Demo\Sample\Providers;

/**
 * Vendor
 */
use Illuminate\Support\ServiceProvider;

/**
 * This class describes demo sample service providers.
 */
class DemoSampleServiceProviders extends ServiceProvider
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
        //Register Our Package routes
        include __DIR__ . '/../Routes/api.php';

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('Demo\Sample\Http\Controllers\DummyController');
    }

}
