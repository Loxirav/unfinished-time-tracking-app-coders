<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // If not an admin, redirect them or show an error
        return redirect()->route('product.login')->with('error', 'Unauthorized access!');
    }
}
