<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use App\Auth\CustomUserProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class CustomAuthProvider extends ServiceProvider
{
    public function boot()
    {
        Auth::provider('custom-driver', function ($app, array $config) {
            return new CustomUserProvider(
                $app['hash'],
                $config['model']
            );
        });
    }
}