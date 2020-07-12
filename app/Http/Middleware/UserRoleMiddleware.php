<?php

namespace App\Http\Middleware;

use Closure;
use App\utilities\UserConstent;
use Illuminate\Support\Facades\Auth;

class UserRoleMiddleware
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
        if(auth()->check() && auth()->user()->role== UserConstent::ADMIN){
            return $next($request);
            
        }
        return redirect('/');
    }
}
