<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$role){
        if(in_array($request->user()->role,$role) == 'Admin'){
            return $next($request);
        }else if(in_array($request->user()->role,$role) == 'Customer'){
            return $next($request);
        }else{
            return redirect('/login');
        }
    }
}
