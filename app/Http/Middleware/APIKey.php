<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class APIKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('Api-Key') === readAPIKey()) {
            return $next($request);
        } else {
            $errors = [
                ['api_key' => ['Api Key Not Valid']],
            ];
            $message = 'Api Key Not Valid';
            return apiErrors($errors,[],$message,500);
        }
        return $next($request);
    }
}
