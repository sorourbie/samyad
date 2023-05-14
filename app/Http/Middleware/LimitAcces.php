<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LimitAcces
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        dd('اکنون دسترس به سایت مجاز نست');
//        return $next($request);

        $currentTime = now()->format('H:i:s');
        $startTime = '07:00:00';
        $endTime = '20:00:00';

        if ($currentTime >= $startTime && $currentTime <= $endTime) {
            return $next($request);
        }

        dd('اکنون سایت در دسترس نیست');

    }
}
