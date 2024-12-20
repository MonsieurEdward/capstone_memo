<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is logged in and if they are not admin
        if (Auth::check() && !Auth::user()->is_admin) {
            return $next($request);
        }

        // If an admin, redirect to a forbidden page or another route
        return redirect('/login')->with('error', '403 FORBIDDEN: Please Login or Register.');
    }
}
