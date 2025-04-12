<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class secretMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (! $request->user()) {
        //     return response(' You Are Unauthorized');
        // }
        if ($request->input('password') != '1111') {
            return response(' You Are Unauthorized', 403);
        }
        return $next($request);
    }
}
