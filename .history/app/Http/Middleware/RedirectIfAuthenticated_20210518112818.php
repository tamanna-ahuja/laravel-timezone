<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
{
    return $guard;
    switch ($guard) 
    {
        case 'admins':
            if (Auth::guard($guard)->check()) 
            {
                return redirect()->route('admin.dashoboard');
            }
            break;

        default:
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
            break;
    }
    return $next($request);
}
protected function unauthenticated($request, AuthenticationException $exception) 
{
    if ($request->expectsJson()) 
    {
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }

    $guard = array_get($exception->guards(), 0);
    switch  ($guard) 
    {
        case 'admins':
            $login = 'admin.login';
            break;

        default:
            $login = 'login';
            break;
    }
    return redirect()->guest(route($login));
}
}
