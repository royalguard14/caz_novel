<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\WebsiteSetting;
use App\Models\AboutDeveloper;
use App\Models\Books;
use App\Models\Genre;
use App\Models\PostComment;
use App\Models\ExtraMe;
use DB;
use Mail;

class WebsiteController extends Controller
{
    


public function maintenance(){

  $data = DB::table('designs')->where('function','maintenance')->first();

  if($data->class == 1){

    return view('errors.maintenance');

  }else{

return redirect()->route('home.index');

  }

}

 


public function index(){

$hero=WebsiteSetting::hero();
$developer=AboutDeveloper::all();
$genre=Genre::all();
$books=Books::limit('10')->get();

$map=DB::table('aboutus_contact')->select(DB::raw('details as details'))->where('type','map')->first();
$location=DB::table('aboutus_contact')->select(DB::raw('details as details'))->where('type','location')->first();

$email=DB::table('aboutus_contact')->select(DB::raw('details as details'))->where('type','email')->first();

$phone=DB::table('aboutus_contact')->select(DB::raw('details as details'))->where('type','phone')->first();
 return view('website.home',compact('hero','developer','genre','books','map','location','email','phone'));

}



public function books()
{
  

$book_details=isset($_GET['details_book']) && !is_null($_GET['details_book']) && !empty($_GET['details_book']) ? $_GET['details_book'] : null;

if($book_details){
$row=explode("-", $book_details);

$data=Books::find($row[0]);

$comment=PostComment::where('book_id',$data->id)->get();

return view('website.library',compact('data','comment'));

}else{

return redirect()->route('home.index');
}


}




public function post(Request $request)
{
    // dd($request->request);
        $postdata['book_id'] = $request->code;
        $postdata['name'] = $request->name;
        $postdata['message'] = $request->comment;
        $postdata['message_reply'] = null;
        $postdata['reply'] = 0;
        $postdata['status'] = 0;
        
         $data = new PostComment($postdata);
                $data->save();




$output='';  
$data=PostComment::where('book_id',$request->code)->get();

foreach ($data as $row) {
    $timeago=ExtraMe::timeago($row->created_at);
    $output.='


 <!-- Post -->
                    <div class="post clearfix " >
                      <div class="user-block">
                       
                        <span class="username">
                          <a href="#">'.$row->name.'</a> <small> - '.$timeago.' </small>
                          
                        </span>
                       
                      </div>
                      <!-- /.user-block -->
                      <p>
                        '.$row->message.'
                      </p>

                    </div>
                    <!-- /.post -->



';
}


echo $output;
}



public function inquiries(Request $request){
 
date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');
   // $contact = new Contactus;
 
   //      $contact->name = $request->name;
   //      $contact->email = $request->email;
   //      $contact->subject = $request->subject;
   //      $contact->message = $request->message;
      
   //      $contact->save();


        \Mail::send('mail',
             array(
                 'name' => $request->name,
                 'email' => $request->email,
                 'subject' => $request->subject,
                 
                 'user_message' => $request->message,
             ), function($message) use ($request)
               {  $message->subject('Inquiries from Website');
                  $message->from($request->email);
                  $message->to('tech.support@halalchamber.com.ph');
               });

 return back()->with('is_success','Saved!');

}












}
