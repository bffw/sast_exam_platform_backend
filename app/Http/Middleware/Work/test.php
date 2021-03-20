<?php

namespace App\Http\Middleware\Work;

use Closure;
use Illuminate\Http\Request;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {    if($request->method()=='POST'){
          return $next($request);
        }else{
            return response()->json([
               
                'type' => 'false',
                'data' => 404
            ]);
        }
        
        }
        
}
