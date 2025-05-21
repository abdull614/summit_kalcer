<?php

namespace App\Providers;

use App\Models\Pembayaran;
use App\Observers\PembayaranObserver;
use Illuminate\Support\ServiceProvider;

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
        Pembayaran::observe(PembayaranObserver::class);
    }
}
