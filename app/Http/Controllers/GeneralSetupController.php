<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;


class GeneralSetupController extends Controller
{

    public function adminabout(){


        $data=DB::table('website_layouts')->where('page','aboutus')->Orderby('id','ASC')->get();

        return view('admin.aboutus.index',compact('data'));
    }



  public function adminannoucement(){


        $data=DB::table('announcement')->get();

        return view('admin.announcement.index',compact('data'));
    }



  public function adminnews(){


        $data=DB::table('news')->get();

        return view('admin.news.index',compact('data'));
    }



 public function add_news(Request $request){


 $fileName = $request->file('headerimg')->getClientOriginalName();


     $destinationPath = public_path().'/uploads/news';

      $request->file('headerimg')->move($destinationPath, $fileName);

        DB::table('news')->insert([
            'image'=>'uploads/news/'.$fileName,
            'title'=>$request->title,
            'date'=>$request->date,
            'content'=>$request->content,
            'status'=>'1',
            'sequence'=>'0'


        ]);

        return back()->with('is_success','Saved!');
    }



  public function adminactivity(){


        $data=DB::table('activity')->get();

        return view('admin.activity.index',compact('data'));
    }



 public function add_act(Request $request){



$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randomu=substr(str_shuffle($permitted_chars), 0, 16); 

 $fileName = $request->file('headerimg')->getClientOriginalName();


     $destinationPath = public_path().'/uploads/activity/header';

      $request->file('headerimg')->move($destinationPath, $fileName);



        DB::table('activity')->insert([
            'unicode'=>$randomu,
            'image'=>'uploads/activity/header/'.$fileName,
            'title'=>$request->title,
            'date'=>$request->date,
            'content'=>$request->content,
            'status'=>'1',
            'sequence'=>'0'


        ]);



$files[] = $request->file('photos');


 foreach ($request->file()['photos'] as $file){
                $fileName = $file->getClientOriginalName();
                $destinationPath = public_path().'/uploads/activity/photos/'.$randomu;

                $file->move($destinationPath, $fileName);



        DB::table('activity_photo')->insert([
            'unicode'=>$randomu,
            'image'=>'uploads/activity/photos/'.$randomu.'/'.$fileName,
            'status'=>'1',
            'sequence'=>'0'


        ]);

              
            }

 

        return back()->with('is_success','Saved!');
    }




  public function adminadvertise(){


        $data=DB::table('advertise')->get();

      

        return view('admin.advertise.index',compact('data'));
    }



  public function advertise_add(Request $request){


 date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');
        $numberdate=strtotime($date);

        $loged=Auth::user();


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randomu=substr(str_shuffle($permitted_chars), 0, 16); 

 // $fileName = $request->file('datafile')->getClientOriginalName();
    
    $fileName = encrypt("israfil",$numberdate.'_'.$randomu.'_'.$loged->id.'_advertise');

     $destinationPath = public_path().'/uploads/ads/';

      $request->file('datafile')->move($destinationPath, $fileName);
    


        DB::table('advertise')->insert([
            'unicode'=>$randomu,
            'image'=>'uploads/ads/'.$fileName,
            'company_code'=>$request->company,
            'branch_code'=>$request->branch,
            'store_code'=>$request->store,
            'date_start'=>$request->datestart,
            'date_end'=>$request->dateend,
            'status'=>'1'

        ]);




      
        return back()->with('is_success','Saved!');
    }

    








// public function adminedit(){

// $code=$_GET['code'];
// $data = DB::table('website_layouts')->where('id',$code)->first();
//  return view('editor5',compact('data'));

// }


// public function edit($page=null,$id=null){

// $data = DB::table('website_layouts')->where('id',$id)->where('page',$page)->first();
//  return view('editor',compact('data'));

// }


// public function editors(Request $request){

// DB::table('website_layouts')->where('id',$request->id)->update([

// 'content'=>$request->editor1
// ]);

//  return back()->with('is_success','Saved!');


// }





public function users(){


$data=DB::table('users')->get();
 return view('admin.users.index',compact('data'));

}




public function register(Request $request){

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randomu=substr(str_shuffle($permitted_chars), 0, 16); 

      DB::table('users')->insert([
            'uniq_code' => $randomu,
            'name' => $request->name,
            'email' => $request->email,
            'username'=> $request->username,
            'password' => Hash::make($request->password),
            'role' => 3,
            'online'=>0,
            'active'=>1
            
        ]);
    


 return back()->with('is_success','Registered Successfully');

}







}


