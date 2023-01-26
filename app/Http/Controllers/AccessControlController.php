<?php

namespace App\Http\Controllers;

use App\Models\AccessControl;
use App\Models\Modules;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class AccessControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $role = DB::table('role')->get();

          return view('admin.access_control.index',compact('role'));
    }

    public function ajaxlist(Request $request)
    {

        $output='';

       $access = DB::table('role')->where('id',$request->id)->first();
       $str_arr = explode (",", $access->modules); 
     
       $modules=DB::table('modules')->get();

       foreach ($modules as $row) {
           
  if (in_array($row->id, $str_arr)){

                 $output.='

                 <div class="col-md-4"> 
                 <input type="checkbox" name="modules[]" value="'.$row->id.'" checked>
                 <label for="modules"> '.$row->module.'</label>
                 </div>';
    }else{

                 
                 $output.='
                 <div class="col-md-4"> 
                 <input type="checkbox" name="modules[]" value="'.$row->id.'">
                 <label for="modules"> '.$row->module.'</label>
                 </div>';
    }
       }

       $output.='<input type="hidden" name="type" value="'.$request->id.'">';
       echo $output;
    }


    public function updateaccess(Request $request)
    {


$dip=implode( ',', $request->modules );
        
        DB::table('role')->where('id',$request->type)->update([

            'modules'=>$dip


        ]);


        return back()->with('is_update','Success!');

    }


     public function ajaxusers(Request $request)
    {

        $output='';

        $user=DB::table('users')->where('role',$request->id)->orderby('first_name','ASC')->get();

foreach($user as $row){

$output.='
                 <div class="col-md-6"> 
                '.$row->first_name.' '.$row->last_name.'
                 </div>';



}


       echo $output;
    }


    public function adduseraccess(Request $request)
    {

        foreach ($request->cc as $row) {
            
            DB::table('users')->where('id',$row)->update([

                'role'=>$request->id

            ]);
        }

        return back()->with('is_success','Success!');

    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('uid');
        $postdata = $request->get('module_id');

        AccessControl::DeleteByUser($id);
        if(!empty($postdata)){

            foreach ($postdata as $postd) {         
                $access = new AccessControl();
                $access->user_id = $id;
                $access->module_id = $postd;
                $access->save();
            }
        }       
        
        return back()->with('is_success', 'Access was successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AccessControl  $accessControl
     * @return \Illuminate\Http\Response
     */
    public function show(AccessControl $accessControl)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AccessControl  $accessControl
     * @return \Illuminate\Http\Response
     */
    public function edit(AccessControl $accessControl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AccessControl  $accessControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccessControl $accessControl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AccessControl  $accessControl
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccessControl $accessControl)
    {
        //
    }

    public function manage($uid){

        $user = User::find($uid);
        $access_controls = AccessControl::ByUser($uid);
        $modules = Modules::all();
        $access_control = [];        
        if(!empty($access_controls)){

            foreach($access_controls as $ac){

            $access_control[] = $ac->module_id;
            }
        }                
        return view('access_control.manage',compact('user','modules','access_control','uid'));
    }




     public function group()
    {
       $users = User::getList(); 
      $access = DB::table('role')->get();

       return view('access_control.group',compact('access','users'));
    }
}
