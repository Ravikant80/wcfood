<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotDeliveryGuys
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
        if (!Auth::guard($guard)->check()) {
            return redirect('deliveryguys');
        }

        return $next($request);
    }
}
