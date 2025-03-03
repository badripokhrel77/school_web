<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && auth()->user()->is_admin) {
            return $next($request);
        }

        return redirect('login')->withErrors('Access Denied. Admins only.');
    }
}
