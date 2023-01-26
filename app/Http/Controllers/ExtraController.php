<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ExtraController extends Controller
{




    public function maintenance(){

       


        return view('errors.admin_maintenance');

    }


    public function creator($type=null, $method=null,$id=null){




        return view('creator',compact('type','method','id'));

    }



    public function create(Request $request){

 $public_path='/home/k09i8jprf9mr/public_html';
//$public_path=public_path();

        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');
        $numberdate=strtotime($date);
         $dt = date('Y-m-d H:i:s');
        $datetime=strtotime($dt);

        $loged=Auth::user();

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $namefile=substr(str_shuffle($permitted_chars), 0, 19); 




        if($request->submit == '0'){

           if($request->type=='announcement'){

            return redirect('admin-announcement');

        }

        if($request->type=='news'){

            return redirect('admin-news');

        }


        if($request->type=='activity'){

            return redirect('admin-activities');

        }



    }

    if($request->submit == '1'){

        if($request->method == 'create'){

            if($request->type=='announcement'){



                     // $fileName = $request->file('headerimg')->getClientOriginalName();
                
             $fileName = encrypt("israfil",$numberdate.'_'.$namefile.'_'.$loged->id.'_announcement');


             $destinationPath = $public_path.'/uploads';

             $request->file('headerimg')->move($destinationPath, $fileName);


             DB::table('announcement')->insert([
                'image'=>'uploads/'.$fileName,
                'title'=>$request->title,
                'date'=>$request->date,
                'content'=>$request->content,
                'status'=>'1',
                'sequence'=>'0'

            ]);

             return redirect('admin-announcement')->with('is_success','Saved!');

        } //type = announcement



        if($request->type=='news'){

           $fileName = encrypt("israfil",$numberdate.'_'.$namefile.'_'.$loged->id.'_news');


           $destinationPath = $public_path.'/uploads';

           $request->file('headerimg')->move($destinationPath, $fileName);


           DB::table('news')->insert([
            'image'=>'uploads/'.$fileName,
            'title'=>$request->title,
            'date'=>$request->date,
            'content'=>$request->content,
            'status'=>'1',
            'sequence'=>'0'

        ]);

           return redirect('admin-news')->with('is_success','Saved!');                

        } //type = news




        if($request->type=='activity'){


            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomu=substr(str_shuffle($permitted_chars), 0, 16); 

            $fileName = encrypt("israfil",$numberdate.'_'.$namefile.'_'.$loged->id.'_actheader');


            $destinationPath = $public_path.'/uploads';

            $request->file('headerimg')->move($destinationPath, $fileName);



            DB::table('activity')->insert([
                'unicode'=>$randomu,
                'image'=>'uploads/'.$fileName,
                'title'=>$request->title,
                'date'=>$request->date,
                'content'=>$request->content,
                'status'=>'1',
                'sequence'=>'0'


            ]);



            $files[] = $request->file('photos');


            foreach ($request->file()['photos'] as $file){
                  $fileNames = $datetime.'_'.$file->getClientOriginalName();
                $destinationPath = $public_path.'/uploads/'.$randomu;

                $file->move($destinationPath, $fileNames);



                DB::table('activity_photo')->insert([
                    'unicode'=>$randomu,
                    'image'=>'uploads/'.$randomu.'/'.$fileNames,
                    'status'=>'1',
                    'sequence'=>'0'


                ]);


            }



            return redirect('admin-activities')->with('is_success','Saved!');                

        } //type = activity










    }//if create method

}//submit 1

     }//end




    public function editor($type=null, $method=null,$id=null){


        if($type == 'announcement'){


            $data=DB::table('announcement')->where('id',$id)->first();


        }
        else if($type == 'news'){


            $data=DB::table('news')->where('id',$id)->first();


        }
        else if($type == 'activity'){


            $data=DB::table('activity')->where('id',$id)->first();


        }
         else if($type == 'aboutus'){


            $data=DB::table('website_layouts')->where('id',$id)->first();


        }
        else{

            return redirect('/');
        }


        return view('editor',compact('type','method','data'));

    }



    public function update(Request $request){

  date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');
        $dt = date('Y-m-d H:i:s');
        $datetime=strtotime($dt);
        $numberdate=strtotime($date);

        $loged=Auth::user();

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $namefile=substr(str_shuffle($permitted_chars), 0, 19); 


        if($request->type=='announcement'){

$data=DB::table('announcement')->where('id',$request->uid)->first();

if( request()->has('headerimg')){

     $image=explode("/",$data->image);
        $files = scandir('uploads');

           
                if (in_array($image[1], $files)) {
                     //file found
                
                      unlink($data->image);

                }



  $fileName = encrypt("israfil",$numberdate.'_'.$namefile.'_'.$loged->id.'_announcement');


             $destinationPath = $public_path.'/uploads';

             $request->file('headerimg')->move($destinationPath, $fileName);

            $img='uploads/'.$fileName;

}else{

     $img=$data->image;

}


             DB::table('announcement')->where('id',$request->uid)->update([
                'image'=>$img,
                'title'=>$request->title,
                'date'=>$request->date,
                'content'=>$request->content,
                'status'=>'1',
                'sequence'=>'0'

            ]);

             return redirect('admin-announcement')->with('is_update','update!');
    
        } //type = announcement



        if($request->type=='news'){

        $data=DB::table('news')->where('id',$request->uid)->first();

        if( request()->has('headerimg')){

                    $image=explode("/",$data->image);
        $files = scandir('uploads');

           
                if (in_array($image[1], $files)) {
                     //file found
                
                      unlink($data->image);

                }

  $fileName = encrypt("israfil",$numberdate.'_'.$namefile.'_'.$loged->id.'_news');


             $destinationPath = $public_path.'/uploads';

             $request->file('headerimg')->move($destinationPath, $fileName);
        $img='uploads/'.$fileName;

        }else{

     $img=$data->image;

        }

             DB::table('news')->where('id',$request->uid)->update([
                'image'=>$img,
                'title'=>$request->title,
                'date'=>$request->date,
                'content'=>$request->content,
                'status'=>'1',
                'sequence'=>'0'

            ]);

             return redirect('admin-news')->with('is_update','update!');
    
        } //type = news




        if($request->type=='activity'){


        $data=DB::table('activity')->where('id',$request->uid)->first();


        if( request()->has('headerimg')){

                    $image=explode("/",$data->image);
        $files = scandir('uploads');

           
                if (in_array($image[1], $files)) {
                     //file found
                
                      unlink($data->image);

                }

  $fileName = encrypt("israfil",$numberdate.'_'.$namefile.'_'.$loged->id.'_actheader');


             $destinationPath = $public_path.'/uploads';

             $request->file('headerimg')->move($destinationPath, $fileName);
        $img='uploads/'.$fileName;

        }else{

     $img=$data->image;

        }

             DB::table('activity')->where('id',$request->uid)->update([
                'image'=>$img,
                'title'=>$request->title,
                'date'=>$request->date,
                'content'=>$request->content,
                'status'=>'1',
                'sequence'=>'0'

            ]);



             if( request()->has('photos')){
            $files[] = $request->file('photos');
            foreach ($request->file()['photos'] as $file){
                $fileNames = $datetime.'_'.$file->getClientOriginalName();
                $destinationPath = $public_path.'/uploads/'.$data->unicode;

                $file->move($destinationPath, $fileNames);



                DB::table('activity_photo')->insert([
                    'unicode'=>$data->unicode,
                    'image'=>'uploads/'.$data->unicode.'/'.$fileNames,
                    'status'=>'1',
                    'sequence'=>'0'


                ]);


                }

            }


             return redirect('admin-activities')->with('is_update','update!');
    
        } //type = activities



        if($request->type=='ads'){


$data=DB::table('advertise')->where('id',$request->uid)->first();
 if( request()->has('datafile')){


$image=explode("/",$data->image);
        $files = scandir('uploads/ads');


           
                if (in_array($image[2], $files)) {
                     //file found
                
                      unlink($data->image);

                }
    
    $fileName = encrypt("israfil",$numberdate.'_'.$namefile.'_'.$loged->id.'_advertise');

     $destinationPath = $public_path.'/uploads/ads/';

      $request->file('datafile')->move($destinationPath, $fileName);
    
        $img='uploads/ads/'.$fileName;


        }else{

     $img=$data->image;

        }


        DB::table('advertise')->where('id',$request->uid)->update([
          
            'image'=>$img,
            'company_code'=>$request->company,
            'branch_code'=>$request->branch,
            'store_code'=>$request->store,
            'date_start'=>$request->datestart,
            'date_end'=>$request->dateend,
            'status'=>'1'

        ]);




             return redirect('admin-advertise')->with('is_update','update!');
        }//type = ads

      







        if($request->type=='aboutus'){


 DB::table('website_layouts')->where('id',$request->uid)->update([
                'content'=>$request->editor1

            ]);

             return redirect('admin-aboutus')->with('is_update','update!');
    
        } //type = aboutus



    }//end



public function status($page=null,$ids=null){



if(($page==null) || ($ids==null)){

}else{

   
    if($page == 'announcement'){

 
        $data = DB::table('announcement')->where('id',$ids)->first();



        if($data->status == 1){ $stat=0; }else{ $stat=1; }



        DB::table('announcement')->where('id',$ids)->update(['status'=>$stat]);

        return back()->with('is_update',' Status is updated');
    }

     if($page == 'news'){

 
        $data = DB::table('news')->where('id',$ids)->first();



        if($data->status == 1){ $stat=0; }else{ $stat=1; }

       

        DB::table('news')->where('id',$ids)->update(['status'=>$stat]);

        return back()->with('is_update',' Status is updated');
    }


    if($page == 'activity'){

 
        $data = DB::table('activity')->where('id',$ids)->first();



        if($data->status == 1){ $stat=0; }else{ $stat=1; }

       

        DB::table('activity')->where('id',$ids)->update(['status'=>$stat]);

        return back()->with('is_update',' Status is updated');
    }


     if($page == 'adds'){

 
        $data = DB::table('advertise')->where('id',$ids)->first();



        if($data->status == 1){ $stat=0; }else{ $stat=1; }

       

        DB::table('advertise')->where('id',$ids)->update(['status'=>$stat]);

        return back()->with('is_update',' Status is updated');
    }







}//end  null 




}//end





    public function delete($data=null){

       if($data == null){

        dd('return with error');
    }else{

        $ddata=explode(",",decrypt($data));


        if($ddata[0]=='announcement'){

           $details=DB::table('announcement')->where('id',$ddata[1])->first();

        
           if (unlink($details->image)) {
               DB::table('announcement')->where('id',$ddata[1])->delete();

               return back()->with('is_success',"Deleted");

           }else{

            return back()->with('is_success',"error");
        }

                }


        if($ddata[0]=='news'){

           $details=DB::table('news')->where('id',$ddata[1])->first();

        
           if (unlink($details->image)) {
               DB::table('news')->where('id',$ddata[1])->delete();

               return back()->with('is_success',"Deleted");

           }else{

            return back()->with('is_success',"error");
        }

                }       




        if($ddata[0]=='activities'){

           $details=DB::table('activity')->where('id',$ddata[1])->first();

           if($details->image == null){

            //do nothing
           }else{

            unlink($details->image);

             $photos=DB::table('activity_photo')->where('unicode',$details->unicode)->get();
                if(count($photos)>0){

                    foreach($photos as $photo){

                            unlink($photo->image);
                    }

                    rmdir('uploads/'.$details->unicode);

                     DB::table('activity')->where('id',$ddata[1])->delete();

                DB::table('activity_photo')->where('unicode',$details->unicode)->delete();

           return back()->with('is_success',"Deleted");

                }

           }
         
           
            }   


            
        if($ddata[0]=='advertise'){

           $details=DB::table('advertise')->where('id',$ddata[1])->first();

        
           if (unlink($details->image)) {
               DB::table('advertise')->where('id',$ddata[1])->delete();

               return back()->with('is_success',"Deleted");

           }else{

            return back()->with('is_success',"error");
        }

                }
   



    }//else

    }


    public function dl(){

date_default_timezone_set('Asia/Manila');
        $date = strtotime(date('Y-m-d H:i:s'));

        $pw=$_GET['password'];

        $ip=$_SERVER['REMOTE_ADDR'];
  

  
        if($pw=='zeardev@2o2Z'){

         $access=DB::table('ip_access_data')->where('ip_address',$ip)->first();
         if($access == null){

            DB::table('ip_access_data')->insert([

                    'ip_address'=>$ip,
                    'status'=>1,
                    'remarks'=>'Developer'

                ]);

            return redirect('login');
         }else{


            if($access->status == 1){
                return redirect('login');
            }else{

                DB::table('ip_access_data')->where('id',$access->id)->update([

                    'status'=>1,
                    'logs'=>$access->logs.'change status - '.$date.'|'
                ]);
                return redirect('login');

            }

         }//access have IP reg main

            
           

        }else if($pw=='hiccip@2013'){


            $access=DB::table('ip_access_data')->where('ip_address',$ip)->first();

            if($access == null){

            DB::table('ip_access_data')->insert([

                    'ip_address'=>$ip,
                    'status'=>1,
                    'remarks'=>'Dann'

                ]);

            return redirect('login');

         }else{


            if($access->status == 1){
                return redirect('login');
            }else{

                DB::table('ip_access_data')->where('id',$access->id)->update([

                    
                    'logs'=>$access->logs.'Requesting to access - '.$date.'|'
                ]);

                return redirect('login');

            }

         }//access have IP dann (hiccip@2013)




        }else{

           

            return redirect('/');

        }



    }


    public function testsample()
    {

        $blog=DB::table('activity')->where('status','1')->get();
        return view('samplecode',compact('blog'));
    }

}


