<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use illuminate\Pagination\Paginator;
use illuminate\Support\Facades\App;
use illuminate\Support\Facades\URL;

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
        Paginator::useBootstrap();
        if (App::environment(['production'])) {
            URL::forceScheme('https');
        }
    }
}
