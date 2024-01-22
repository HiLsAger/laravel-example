<?php

namespace App\Http\Middleware\Permissions;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GroupDeletePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        if ($user->hasPermisson('group-delete', $request->input('group_id'))) {
            return $next($request);
        }
        return redirect('home');
    }
}
