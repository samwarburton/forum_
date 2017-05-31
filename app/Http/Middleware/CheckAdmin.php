<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        
        if($request->user()->hasRole('admin')){
        return $next($request);
        }

        return redirect('/')->with('status', 'You do not have permission to access that area');
    }
}
