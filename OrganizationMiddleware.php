<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class OrganizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if (!(Auth::check() && Auth::user()->isOrganization()))
        {
            return redirect('/')->withErrors('Access denied 2');
        }
        return $next($request);
    }
}
