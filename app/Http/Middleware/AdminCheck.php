<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('admincheck', auth()->user()->is_admin);

        if (!auth()->check() || !auth()->user()->is_admin)
        {
            // abort(code: 403);
            // view('welcome');
            return redirect('/');
        }
        return $next($request);
    }
}
