<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Response;

class AjaxController extends Controller
{
    //
    public function ajax_advertise_id(Request $request){

      $data = DB::table('advertise')->where('id',$request->id)->first();



      return Response()->json($data);
    }

public function maintenance_data(Request $request){


  if($request->id == 1){

 DB::table('designs')->where('function','maintenance')->update([

'class'=>0
 ]);
 
  }else{

  DB::table('designs')->where('function','maintenance')->update([

'class'=>1
 ]);

    }

}








}
