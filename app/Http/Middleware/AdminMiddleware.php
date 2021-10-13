<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guest())
        {
            return redirect('/')->with('success', 'Nemate pristup ovoj ruti!');
        }
        if(Auth::user()->vrstakorisnika == 'Admin')
        {
            return $next($request);
        }
        else
        {
            return redirect('/')->with('success', 'Nemate pristup ovoj ruti!');
        }
    }

}
