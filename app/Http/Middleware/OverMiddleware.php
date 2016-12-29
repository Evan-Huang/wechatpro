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

        $end_date_one = strtotime('2016-12-30 15:01:00');
        $end_date_two = strtotime('2016-12-31 21:01:00');



        //到达时间点截止活动
        if ( time() > $end_date_two) {
            return redirect('indexover');
        }

        //到达时间点停止除夕倒數抽獎
        if ( time() > $end_date_one) {
            $request->session()->put('lucky_draw',true);
        }else {
            $request->session()->put('lucky_draw', false);
        }

        if (isset($_GET['test']) && $_GET['test'] == 2) {
            return redirect('indexover');
        }

        if (isset($_GET['test']) && $_GET['test'] == 1) {
            $request->session()->put('lucky_draw',true);
        }

        return  $next($request);
    }
}
