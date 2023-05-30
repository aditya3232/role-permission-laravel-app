<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Admin\AdminController;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->user() || !auth()->user()->isAdmin()) {
            abort(403);
        }

        // jika middleware admin benar, arahakan ke view admin
         return response()->view('mazer_template.admin.home');

        return $next($request);
    }
}