<?php

namespace App\Providers;

use App\Models\Navlink;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class NavlinkServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Register the view composer for navlinks
        View::share('navlinks', Navlink::all());
    }
}
