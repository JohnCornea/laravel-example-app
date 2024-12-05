<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\App;
use Illuminate\Pagination\Paginator;


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
        // Check if app is on prod, otherwise, this implementation makes no sense for local
        // Password::defaults(function() {
        //     $theRules = Password::min(6)->mixedCase()->symbols()->numbers();

        //     return $this->app->isProduction() ? $theRules->uncompromised() : $theRules;
        // });

        // Model::unguard();

        // Way of translating the URI of the routes by overwriting 
        Route::resourceVerbs([
            'create' => 'creeaza',
            'show' => 'afiseaza',
            'edit' => 'editeaza',
        ]);

        Paginator::useBootstrapFive();
    }
}
