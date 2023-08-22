<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
Use Auth;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role1,$role2): Response
    {
        if(Auth::check() &&(Auth::user()->role == $role1 || Auth::user()->role == $role2)){
        return $next($request);
        }
        return response()->json(["You don't have permission to access this page"]);
    }
}
