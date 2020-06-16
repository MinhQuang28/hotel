<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class LoginUser{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
          if(Session::has('ma_us')){
            return $next($request);
        }
        return redirect()->route('login')->with('error1','Bạn phải đăng nhập để đặt phòng');

    }
}
