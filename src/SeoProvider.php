<?php

namespace Atin\LaravelSeo;

use Illuminate\Support\ServiceProvider;

class SeoProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-seo');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-seo');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-seo')
        ], 'laravel-seo-views');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-seo'),
        ], 'laravel-seo-lang');
    }
}