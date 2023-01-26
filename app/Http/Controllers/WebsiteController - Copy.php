<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use DB;
use Mail;

class WebsiteController extends Controller
{
    


public function maintenance(){

  $data = DB::table('designs')->where('function','maintenance')->first();

  if($data->class == 1){

    return view('errors.maintenance');

  }else{

return redirect('/');
  }

}

 


public function index(){


//->inRandomOrder()->limit('4')->get();

$data=DB::table('announcement')->where('status',1)->Orderby('sequence','ASC')->limit('4')->get();

$data2=DB::table('news')->where('status',1)->Orderby('sequence','ASC')->limit('11')->get();//11 dpt
$data3=DB::table('advertise')->where('status',1)->Orderby('id','ASC')->limit('4')->get();
$data4=DB::table('activity')->where('status',1)->Orderby('sequence','ASC')->limit('5')->get();//11 dpt


 return view('welcome',compact('data','data2','data3','data4'));

}


public function aboutus(){

if(isset($_GET['page'])){
$page=$_GET['page'];

$data = DB::table('website_layouts')->where('title',$page)->first();
 return view('website.aboutus',compact('data'));
}else{

//error 404 dpt
 return view('welcome');
}
}





public function officers(){


$data=DB::table('officersandcommittees')->select(DB::raw('set_code as set_code'))->groupBy('set_code')->get();

 return view('website.officers',compact('data'));

}


public function getsetofficer(Request $request){

$output='';

$data = DB::table('officersandcommittees')->where('set_code',$request->id)->get();

foreach ($data as $row) {
    

    $output.= '


      <div class="col-lg-4 col-md-6 content-item">
                <span><p>'.$row->position.'</p></span>
            <h4>'.$row->name.'</h4>
       
            
         
      </div>

    ';
}

echo $output;



}






public function services(){


$data = DB::table('website_layouts')->where('title','services')->first();
 return view('website.services',compact('data'));

}



public function halal_process(){


$data = DB::table('website_layouts')->where('title','services')->first();
 return view('website.process',compact('data'));

}


public function requirements(){



$data = DB::table('website_layouts')->where('title','process')->first();
 return view('website.requirements',compact('data'));



}



public function requirements_selected(Request $request){



$output='';


if($request->id == 'product'){

 $output.= '
<p>a. Letter of Intent (Address to Ustadz Alexander M. Sultan, President, Halal International Chamber of Commerce and Industries of the Philippines (HICCIP))</p>

<p>b. Application Form (<a href="'.Route('download').'">Download Here!</a>)</p>

<p>c. Company Profile</p>

<p>d. SEC or DTI Registration Certificate</p>

<p>e. FDA Certificate/Permits, (LTO) and (CPR)</p>

<p>f. Laboratory analysis if any</p>

<p>g. Mayor&rsquo;s Permit</p>

<p>h. BIR Registration (Form 2303)</p>

<p>i. Establishment Layout</p>

<p>j. Flow Chart of Manufacturing Operation of the Product Being Applied for Halal Certification</p>

<p>k. List of Ingredients, Raw Materials and Suppliers or Manufacturers (Processed Products)</p>

<p>l. Application fee (1,000.00)</p>

<p>m. Other requirements may request by the Halal Committee if necessary</p>

    ';
}else if($request->id == 'establishment'){

 $output.= '
 <p>a. Letter of Intent (Address to Ustadz Alexander M. Sultan, President, Halal International Chamber of Commerce and Industries of the Philippines (HICCIP))</p>

<p>b. Application Form (<a href="'.Route('download').'">Download Here!</a>)</p>

<p>c. Company Profile</p>

<p>d. SEC or DTI Registration Certificate</p>

<p>e. FDA Certificate/Permits, (LTO) and (CPR)</p>

<p>f. Laboratory Analysis if any</p>

<p>g. Environmental compliance Certificate (ECC) For large scale establishment</p>

<p>h. Mayors Permit</p>

<p>i. BIR Registration (Form 2303)</p>

<p>j. Establishment Layout</p>

<p>k. Flow Chart of Company Operation</p>

<p>l. List of Products/MENU with Ingredients and Raw Materials and Suppliers.</p>

<p>m. List and addresses of branches or franchises, if there are any</p>

<p>n. Application fee (1,000.00)</p>

<p>o. Other requirements may request by the Halal Committee if necessary</p>

    ';
}else if($request->id == 'abbattoir'){



$output.= '
   <p>a. Letter of Intent</p>

<p>b. Application Form (<a href="'.Route('download').'">Download Here!</a>)</p>

<p>c. Company Profile</p>

<p>d. SEC or DTI Registration</p>

<p>e. Environmental compliance Certificate (ECC)</p>

<p>f. Mayors Permit</p>

<p>g. BIR Permit</p>

<p>h. Building Permit</p>

<p>i. NMIS accreditation</p>

<p>j. Flow Chart of Operation of the Abattoir</p>

<p>k. Application fee (1,000.00)</p>

<p>l. Other requirements may be requested by the Halal Committee if necessary</p>

    ';

}else{

$output.= '
<p>No Data Found</p>

';

}
   

echo $output;



}



public function contactus(){


$data = DB::table('website_layouts')->where('title','contact')->first();


 return view('website.contactus',compact('data'));

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








public function announcement(){

if(isset($_GET['no'])){
$page=$_GET['no'];



$data = DB::table('announcement')->where('id',$page)->first();
 return view('website.article',compact('data'));
}else{


//error 404 dpt
 return redirect()->route('index');
}
}





public function news(){

if(isset($_GET['no'])){
$page=$_GET['no'];


$data = DB::table('news')->where('id',$page)->first();
 return view('website.article',compact('data'));
}else{


//error 404 dpt
 return redirect()->route('index');
}
}










}
