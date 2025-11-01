<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
class CheckRole{
    public function handle($request, Closure $next,$role){
        $user = $request->user();
        if(!$user){
            abort(403);
        }
        $allowed= explode('|', $role);
        if (! in_array($user->role,$allowed)) {
            abort(403);
        }
        return $next($request);
    }
}
