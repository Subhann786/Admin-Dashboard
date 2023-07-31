<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MyCustomMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            // User is not authenticated, redirect to login page or return an error response
            return redirect()->route('login');
        }

        return $next($request);
    }
}
