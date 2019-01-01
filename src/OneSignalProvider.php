<?php

namespace MuratDemir\OneSignal;

use Illuminate\Support\ServiceProvider;

class OneSignalProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/onesignal.php', 'onesignal'
        );

    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/onesignal.php' => config_path('onesignal.php'),
        ]);
    }

}