<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//membutuhkan tambahan ini
use Illuminate\Support\Facades\Schema;


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
        //tambahkan ini jika menggunakan windows
        Schema::defaultStringLength(191);
    }
}
