<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CentralOfficer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        // if (Auth::check() && Auth::user()->role == '2') {
        //     return $next($request);
        // }
        $roles = DB::table('roles')->where('id',Auth::user()->role)->first();
        if (Auth::check() && $roles->name == 'Central Officer') {
            return $next($request);
        }

        // set to "Unauthorized view!"
        return redirect('home');

    }
}
