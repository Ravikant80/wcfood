<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfDeliveryGuys
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
 public function handle($request, Closure $next, $guard = 'deliveryguy')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/deliveryguys-dashboard');
        }

        return $next($request);
    }
}
