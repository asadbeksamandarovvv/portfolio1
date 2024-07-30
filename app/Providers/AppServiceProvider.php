<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ResumeService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ResumeService::class, function ($app) {
            return new ResumeService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
