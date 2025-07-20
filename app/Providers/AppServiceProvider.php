<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('*', function ($view) {
                $setting = \App\Models\Setting::first();
                $page10  = \App\Models\Page::find(10);
                $page12  = \App\Models\Page::find(12);
                $view->with([
                    'setting' => $setting,
                    'page10' => $page10,
                    'page12' => $page12,
                ]);
            });
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting = \App\Models\Setting::first();
        
    }
}
