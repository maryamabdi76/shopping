<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Users;

class Roles
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

        $id = auth()->user()->id;
        $user = Users::find($id);
        foreach ($user->role as $role)
            if ($role->name == 'Admin') {
                return $next($request);
                // return redirect()->route('home');
            } elseif ($role->name == 'User') {
                return redirect()->route('profile');
                // return $next($request);
            }
        // return $next($request);
    }
}
