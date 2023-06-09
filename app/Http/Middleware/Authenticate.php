<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
        // return $request->expectsJson() ? null : route('login');
        // if (Auth::check() == null) {
        //     return redirect()->route('login')->with('warning', 'Anda harus login terlebih dahulu untuk mengakses halaman Cart.');
        // }

        // return $next($request);
    }
}
