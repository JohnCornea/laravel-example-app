<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class UserDataCustom extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // $user = new Utilizator('ionut', 'ionut.cornea@gmail.com');

        // view()->share(['user' => $user]);
    }
}

