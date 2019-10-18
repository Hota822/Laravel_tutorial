<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

public function boot()
{
    Schema::defaultStringLentgh(191);
}

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
