<?php

namespace App\Providers;

use App\Services\v1\impl\OfferServiceImpl;
use App\Services\v1\OfferService;
use Illuminate\Support\ServiceProvider;

class SystemServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OfferService::class, function ($app) {
            return (new OfferServiceImpl());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
