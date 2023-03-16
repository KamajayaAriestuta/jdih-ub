<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$levels): Response
    {

        if(in_array($request->user()->role, $levels)){
            return $next($request);
        }
        return redirect()->route('admin.login');
    }
}

// $user = Auth::user();
//         if($user){
//             return $next($request);
//         }
//         return redirect()->route('admin.login');
