<?php

namespace Adelphia\Coinconnect;

use Illuminate\Support\ServiceProvider;
use Adelphia\Coinconnect\Coinconnect;

class CoinconnectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('Coinconnect', function(){
            return new Coinconnect;
        });
    }
}
