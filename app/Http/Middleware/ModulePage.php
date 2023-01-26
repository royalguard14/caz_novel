<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AccessControl;
use Auth;
use DB;

class ModulePage
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
      
      $data = DB::table('designs')->where('function','maintenance')->first();
   
      if($data->class == 1){

        return redirect('maintenance');

      }else{

         return $next($request);

      }
       
      
      
    }
}
