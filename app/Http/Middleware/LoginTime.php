<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Cache\RateLimiter;
use Symfony\Component\HttpFoundation\Response;
class LoginTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected $limiter;



//    public function handle(Request $request, Closure $next)
//    {
//
//
//        return $next($request);
//    }

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle($request, Closure $next)
    {
        if ($this->limiter->tooManyAttempts($this->key($request), 5, 1)) {
            return response()->json([
                'message' => 'Too many login attempts. Please try again in 1 minute.',
            ], Response::HTTP_TOO_MANY_REQUESTS);
        }

        $response = $next($request);

        if ($response->getStatusCode() === Response::HTTP_UNAUTHORIZED) {
            $this->limiter->hit($this->key($request), 60);
        }

        return $response;
    }

    protected function key($request)
    {
        return $request->ip();
    }

}
