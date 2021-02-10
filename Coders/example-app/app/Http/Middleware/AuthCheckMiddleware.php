<?php

namespace App\Http\Middleware;

use Closure;

class AuthCheckMiddleware
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
      $age = 2;
      if($age > 18){
          return $next($request);
      }else{
          return redirect('admin/login');
      }
    }
}
