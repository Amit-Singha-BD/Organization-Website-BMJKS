<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Models\ViewCount;

class ViewCountMiddleware
{
    public function handle($request, Closure $next)
    {
        $sessionKey = 'view_counted'; // সেশনের ইউনিক কী
        $sessionLifetime = 12 * 60;   // 12 ঘন্টা (মিনিটে)

        // যদি সেশন না থাকে তাহলে ভিউ কাউন্ট বাড়ানো হবে
        if (!Session::has($sessionKey)) {
            $view = ViewCount::first();

            if ($view) {
                $view->increment('count');
            } else {
                ViewCount::create(['count' => 1]);
            }

            // সেশন সেট করা (১২ ঘণ্টা স্থায়ী থাকবে)
            Session::put($sessionKey, true);
            Session::put('view_counted_time', now());
            Session::save();

            // সেশনের মেয়াদ কাস্টমভাবে সেট করা (optional)
            config(['session.lifetime' => $sessionLifetime]);
        }

        return $next($request);
    }
}
