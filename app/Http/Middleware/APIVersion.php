<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class APIVersion
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
        if($request->header('Api-Version') === "v1"){
            return $next($request);
        }
        else{
            $errors = [
                ['api_version' => ['Api Version Not Valid']],
            ];
            $message = 'Api Version Not Valid';
            return apiErrors($errors,[],$message,500);
        }
    }
}
