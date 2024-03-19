<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $view->with('cartItems', cart::where('user_id', auth()->id())->get());
        });
        
    }
}
