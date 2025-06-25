<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->user()->role === $role) {
            return $next($request);
        }

        // Option 1: Redirect to home with error message
        return redirect('/')->with('error', 'You do not have permission to access this page.');

        // Option 2: Return 403 Forbidden
        // abort(403, 'Unauthorized action.');
    }
}
