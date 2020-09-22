<?php

namespace App\Providers;

// Jika di namespace yang sama bisa gunakan penulisan seperti ini
use App\{ Category, Product };
use App\Observers\{ CategoryObserver, ProductObserver };
use Illuminate\Support\ServiceProvider;

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
        Product::observe(ProductObserver::class);
        Category::observe(CategoryObserver::class);
    }
}
