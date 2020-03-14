<?php

namespace App\Http\Middleware;

use App\Http\Controllers\CityCookieController;
use Closure;

class CheckCity
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
        if (! $request->hasCookie('city')) {
            if (cityDetermineByIp() !== null) {
                return $next($request)->cookie((new CityCookieController())->getCityCookie(cityDetermineByIp()));
            }
        }

        return $next($request);
    }
}
