<?php

namespace App\Http\Middleware;

use Closure;

class roleCheck
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
        //check user type  
        if(Auth::check() && Auth::user()->userType == 'admin'){
            return $next($request);
        }else{
            return redirect('/shippers');
        }   
        
    }
}
