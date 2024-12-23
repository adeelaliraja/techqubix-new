<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SEOServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('seo', [
                'title' => config('seo.default_title'),
                'description' => config('seo.default_description'),
                'keywords' => config('seo.default_keywords'),
            ]);
        });
    }
}
