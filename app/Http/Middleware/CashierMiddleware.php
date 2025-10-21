<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CashierMiddleware {

    public function handle(Request $request, Closure $next): Response {
        if(Auth::check() && Auth::user()->account_type === 'cashier'){
            return $next($request);
        }
        else{
            return redirect()->back();
        }
    }
}