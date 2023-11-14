<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotArtist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('artist')->check()){
            return redirect('artist/login');
        }
        return $next($request);
       
    }
    // public function handle($request, Closure $next)
    // {
    //     if (!Auth::guard('artist')->check()) {
    //         return redirect()->route('artist.login');
    //     }

    //     return $next($request);
    // }

}
