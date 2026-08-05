<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Fortify::loginView(function () {
            return view('login');
        });


        Fortify::authenticateUsing(function (Request $request) {

            $usuario = \App\Models\Usuario::where('email', $request->email)->first();

            if ($usuario && \Hash::check($request->password, $usuario->senha)) {
                return $usuario;
            }

            return null;
        });


        RateLimiter::for('login', function (Request $request) {

            return Limit::perMinute(5)->by(
                Str::lower($request->input('email')) . '|' . $request->ip()
            );

        });
    }
}