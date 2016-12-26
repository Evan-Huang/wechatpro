<?php

namespace App\Http\Middleware;

use Closure;

class OverMiddleware
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
//        $end_date = strtotime('2016-12-30 21:00:00');
        $end_date = strtotime('2016-12-30 21:0:00');
        if ( time() > $end_date) {
            //到达时间点截止活动
        }



        return $next($request);
    }
}
