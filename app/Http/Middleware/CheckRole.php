<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param $roles
     * @return mixed
     * @internal param string $role
     */
    public function handle($request, Closure $next, $roles)
    {
        $roles = explode('|', $roles);
        array_push($roles, 'root'); // root should always pass

        if (!$request->user()->hasAnyRole($roles)) {
            return redirect()->back()->withErrors(['You shall not pass!']);
        }

        return $next($request);
    }

}