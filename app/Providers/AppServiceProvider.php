<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


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
        // Way of translating the URI of the routes by overwriting 
        Route::resourceVerbs([
            'create' => 'creeaza',
            'show' => 'afiseaza',
            'edit' => 'editeaza',
        ]);
    }
}
