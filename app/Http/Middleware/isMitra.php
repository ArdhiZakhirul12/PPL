<?php

namespace App\Http\Middleware;

use App\Models\mitra;
use Closure;
use Illuminate\Http\Request;

class isMitra
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
        
        if(!auth()->check() || auth()->user()->role !== 'mitra'){
            abort(403);
        }
        return $next($request);
    }
}
