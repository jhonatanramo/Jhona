<?php

namespace App\Http\Middleware;

use illuminate\auth\Middleware\Authenticate as middlewere;
use Illuminate\Http\Request;

class Authenticate extends middlewere
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request    
     *@return string|null
     */
    protected function redirectTo(Request $request)
    {
        if(!$request->expectsJson()){
            return route('login');
        }
    }
}
