<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (!Auth::check() || Auth::user()->role !== $role) {
            abort(403, 'شما اجازه دسترسی به این بخش را ندارید.');
        }
        return $next($request);
    }
}
