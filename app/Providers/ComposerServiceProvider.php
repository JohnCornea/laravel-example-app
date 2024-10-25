<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\UserViewComposer;

class ComposerServiceProvider extends ServiceProvider
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
        view()->composer(['dashboard', 'profile'], UserViewComposer::class);

        // view()->composer(['dashboard', 'profile'], function($view) {
           
        //     $view->with('user', new Utilizator('ion', 'ion@gmail.com'));
        // });
    }
}
