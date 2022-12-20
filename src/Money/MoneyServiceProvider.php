<?php

namespace Aharen\Money;

use Aharen\Money\MoneyManager;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class MoneyServiceProvider extends LaravelServiceProvider
{
    public function register()
    {
        $this->app->singleton('App\Services\Money\MoneyManager', function ($app) {
            return new MoneyManager($app);
        });
    }
}