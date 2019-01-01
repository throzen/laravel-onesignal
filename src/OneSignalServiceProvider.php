<?php

namespace MuratDemir\OneSignal;

use Illuminate\Support\ServiceProvider;

class OneSignalServiceProvider extends ServiceProvider
{


    public function boot()
    {
        $this->publishes([
            dirname(__DIR__) . '/config/onesignal.php' => config_path('onesignal.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/config/onesignal.php', 'onesignal'
        );

    }

}