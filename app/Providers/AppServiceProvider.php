<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\JurusanService;
use App\Service\Contract\SupirServiceProvider;
use App\Service\Contract\JurusanServiceProvider;
use App\Service\SupirService;

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
        $this->app->bind(JurusanServiceProvider::class, JurusanService::class);
        $this->app->bind(SupirServiceProvider::class, SupirService::class);
    }
}
