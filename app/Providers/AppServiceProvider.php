<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\RuteService;
use App\Service\Contract\RuteServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RuteServiceProvider::class, RuteService::class);
    }
}
