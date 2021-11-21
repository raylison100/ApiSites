<?php

namespace App\Http\Middleware;

use Closure;

class AuthMember
{
    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function handle($request, Closure $next)
    {
        $request->merge(['member_id' => $request->header('Authorization')]);
        return $next($request);
    }

}
