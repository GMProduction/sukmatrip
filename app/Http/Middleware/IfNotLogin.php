<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Class IfNotLogin
 * @package App\Http\Middleware
 */
class IfNotLogin
{
    /**
     * @param $request
     * @param Closure $next
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handle($request, Closure $next)
    {
        if(!(Auth::guard('web')->check())){
            return redirect('/login');
        }
        return $next($request);
    }
}
