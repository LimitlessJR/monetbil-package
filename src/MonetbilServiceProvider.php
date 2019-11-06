<?php

namespace Tchdev\Monetbil;

use Illuminate\Support\ServiceProvider;
use Tchdev\Monetbil\Facades\Monetbil;

class MonetbilServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('MonetBil', function () {
            return new MonetBil;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/monetbil.php', 'monetbil'
        );

        $this->publishes([
            __DIR__.'/config/monetbil.php' => config_path('monetbil.php'),
        ]);

        $this->publishes([
            __DIR__.'/Resources/assets' => public_path('vendor/monetbil'),
        ], 'public');
    }
}
