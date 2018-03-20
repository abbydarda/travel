<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\JurusanService;
use App\Service\JadwalService;
use App\Service\SupirService;
use App\Service\Contract\SupirServiceProvider;
use App\Service\Contract\JadwalServiceProvider;
use App\Service\Contract\JurusanServiceProvider;

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
        $this->app->bind(JadwalServiceProvider::class, JadwalService::class);
    }
}
