<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Http\Middleware\Route;

class AdminAccessOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {




        $id = Auth::id();
        $user = DB::table('users')->where('id',$id)->first();

if(($user->role == 1) OR ($user->role == 2)){

return $next($request);

}else{

return redirect('restricted_page');

}



        
    }
}
