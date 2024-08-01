<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        // print_r($request->age);
        echo '<script>alert("massage from Age Check middleware")</script>'; 

        return $next($request);

    //     echo "<br> ";
    //     if ($request->age>=18){            
        
    //     echo "massage from Age Check middleware";
    //     echo "<br> ";
        // return $next($request);
    // }
    // else{
    //     return response('you are not allowed to access this page because you are not 18+',403);
        
    //     }
}
}
