<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessKeyApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apikey = $request->headers->get('x_api_key');
        if ($apikey !=env('X_API_KEY')){
            return response()->json(['Mensaje'=>"No Autorizado"],401);
        }else{
            return $next($request);

        }
    }
}
