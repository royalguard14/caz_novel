<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Route;
use Auth;

class CLientsController extends Controller
{



   
    public function index(){


$data=DB::table('client_details')->get();


    return view('admin.clients.index',compact('data'));
   }



    public function company_profile($id=null){

    

$data=DB::table('client_details')->where('id',$id)->first();
   
$requests=DB::table('client_request')->where('company_id',$id)->get();

$certified=DB::table('client_request')->where('company_id',$id)->where('request_status',2)->get();
$pending=DB::table('client_request')->where('company_id',$id)->where('request_status',0)->get();
$allcode=DB::table('client_products')->where('company_id',$id)->get();


    return view('admin.clients.profile',compact('data','requests','certified','pending','allcode'));
   }

   




    public function create(Request $request){


date_default_timezone_set('Asia/Manila');
$date = date('Y-m-d H:i:s');
$loged=Auth::user();


$last_entry=DB::table('client_details')->orderBy('id','DESC')->first();
if($last_entry == null){$num=0;}else{$num=$last_entry->id;}


$structure = storage_path().'/clients/'.($num+1);


if (mkdir($structure, 0777, true)) {

$filename=$structure.'/'.($num+1).'.txt';


$myfile = fopen($filename, "wb") or die("Unable to open file!");
$data=$request->company.'|'.$request->company_desc.'|'.$request->company_address.'|'.$request->company_number.'|'.$request->company_owner.'|'.$date.'|'.$loged->id;


fputs($myfile,$data);
fclose($myfile);



 DB::table('client_details')->insert([

   'company_name'=>$request->company,
   'company_description'=>$request->company_desc,
   'company_address'=>$request->company_address,
   'company_contactp'=>$request->company_person,
   'company_contact'=>$request->company_number,
   'company_owner'=>$request->company_owner


]);

 return back()->with('is_success',' Company ADDED!');
}else{

return back()->with('is_success',' Failed to add Data');

}
   }


public function create_request(Request $request){


date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');


$loged=Auth::user();

 $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $randomu=substr(str_shuffle($permitted_chars), 0, 19); 

$count_req=DB::table('client_request')->where('id',$request->company_uid)->get();


$structure = storage_path().'/clients/'.$request->company_uid.'/'.$randomu;


if (mkdir($structure, 0777, true)) {


DB::table('client_request')->insert([

'unicode' =>$randomu,
'company_id' =>$request->company_uid,
'request_name' =>str_pad($request->company_uid, 4, '0', STR_PAD_LEFT).''.str_pad(count($count_req), 4, '0', STR_PAD_LEFT),
'request_type' =>$request->type,
'request_datetime' =>strtotime($date),
'remarks' =>$request->remarks,
'steps' =>1,
'title_name'=>$request->title_name,
'appfor'=>$request->appfor,
'request_status'=>0

      ]);


foreach ($request->items as $item) {


$row=explode("|", $item);


DB::table('client_products')->insert([

'unicode' =>$randomu,
'company_id' =>$request->company_uid,
'item' =>$row[0],
'code' =>$row[1],
'status' =>0

      ]);

}


$product=array(

   array('letter'=>'a','title'=>'Letter of Intent'),
array('letter'=>'b','title'=>'Application Form'),
array('letter'=>'c','title'=>'Company Profile'),
array('letter'=>'d','title'=>'SEC or DTI Registration Certificate'),
array('letter'=>'e','title'=>'FDA Certificate/Permits, (LTO) and (CPR)'),
array('letter'=>'f','title'=>'Laboratory analysis if any'),
array('letter'=>'g','title'=>'Mayors Permit'),
array('letter'=>'h','title'=>'BIR Registration (Form 2303)'),
array('letter'=>'i','title'=>'Establishment Layout'),
array('letter'=>'j','title'=>'Flow Chart of Manufacturing Operation of the Product Being Applied for Halal Certification'),
array('letter'=>'k','title'=>'List of Ingredients, Raw Materials and Suppliers or Manufacturers (Processed Products)'),
array('letter'=>'l','title'=>'Application fee (1,000.00)'),
array('letter'=>'m','title'=>'Other requirements may request by the Halal Committee if necessary')


);

     

$establishment=array(
array('letter'=>'a','title'=>'Letter of Intent'),
array('letter'=>'b','title'=>'Application Form'),
array('letter'=>'c','title'=>'Company Profile'),
array('letter'=>'d','title'=>'SEC or DTI Registration Certificate'),
array('letter'=>'e','title'=>'FDA Certificate/Permits, (LTO) and (CPR)'),
array('letter'=>'f','title'=>'Laboratory analysis if any'),
array('letter'=>'g','title'=>'Environmental compliance Certificate (ECC) For large scale establishment'),
array('letter'=>'h','title'=>'Mayors Permit'),
array('letter'=>'i','title'=>'BIR Registration (Form 2303)'),
array('letter'=>'j','title'=>'Establishment Layout'),
array('letter'=>'k','title'=>'Flow Chart of Company Operation'),
array('letter'=>'l','title'=>'List of Products/MENU with Ingredients and Raw Materials and Suppliers.'),
array('letter'=>'m','title'=>'List and addresses of branches or franchises, if there are any'),
array('letter'=>'n','title'=>'Application fee (1,000.00)'),
array('letter'=>'o','title'=>'Other requirements may request by the Halal Committee if necessary')



);



$abbattoir=array(
array('letter'=>'a','title'=>'Letter of Intent'),
array('letter'=>'b','title'=>'Application Form'),
array('letter'=>'c','title'=>'Company Profile'),
array('letter'=>'d','title'=>'SEC or DTI Registration Certificate'),
array('letter'=>'e','title'=>'Environmental compliance Certificate (ECC)'),
array('letter'=>'f','title'=>'Mayors Permit'),
array('letter'=>'g','title'=>'BIR Registration (Form 2303)'),
array('letter'=>'h','title'=>'Building Permit'),
array('letter'=>'i','title'=>'NMIS accreditation'),
array('letter'=>'j','title'=>'Flow Chart of Operation of the Abattoir'),
array('letter'=>'k','title'=>'Application fee (1,000.00)'),
array('letter'=>'l','title'=>'Other requirements may request by the Halal Committee if necessary')


);

if($request->type == 'product'){


foreach($product as $row){

DB::table('client_files')->insert([

'unicode'=>$randomu,
'type'=>$request->type,
'letters'=>$row['letter'],
'description'=>$row['title'],
'status'=>0,

]);

}


}
if($request->type == 'establishment'){


foreach($establishment as $row){

DB::table('client_files')->insert([

'unicode'=>$randomu,
'type'=>$request->type,
'letters'=>$row['letter'],
'description'=>$row['title'],
'status'=>0,

]);

}


}



if($request->type == 'abbattoir'){


foreach($abbattoir as $row){

DB::table('client_files')->insert([

'unicode'=>$randomu,
'type'=>$request->type,
'letters'=>$row['letter'],
'description'=>$row['title'],
'status'=>0,

]);

}


}

//auto add mga process remarks



}//mkdir


    return back()->with('is_success',' Request Added') ;
   }





    public function request_data($id=null){

      
      $files=DB::table('client_files')->where('unicode',$id)->orderBy('id','ASC')->get();
      $products = DB::table('client_products')->where('unicode',$id)->get();
      $request = DB::table('client_request')->where('unicode',$id)->first();
      $company_details=DB::table('client_details')->where('id',$request->company_id)->first();



      $step9=DB::table('certified')->where('unicode',$request->unicode)->first();


      // dd($files,$products,$request);

    return view('admin.clients.details',compact('files','products','request','company_details','step9'));
   }


    public function request_data_update(Request $request,$id=null,$steps=null){



       if($steps=='step-1') {

        


date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');
  
$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();
  
$fileName = strtotime($date).'-'.$request->file('datafile')->getClientOriginalName();


$destinationPath = storage_path().'/clients/'.$req->company_id.'/'.$req->unicode.'/documents_req';
$request->file('datafile')->move($destinationPath, $fileName);



      DB::table('client_files')->where('id',$request->type)->update([

   
         'remarks'=>$request->remarks,
         'path'=>'clients/'.$req->company_id.'/'.$req->unicode.'/documents_req/'.$fileName,
         'date_upload'=>strtotime($date),
         'status'=>1

      ]);


      }



      if($steps=='step-2') {



$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();

   $data=DB::table('process_log')->where('unicode',$req->unicode)->where('process',$steps)->first();

   if($data == null){

      DB::table('process_log')->insert([

         'unicode'=>$req->unicode,
         'process'=>$steps,
         'remarks'=>$request->remarks,
         'encoder'=>$loged->id

      ]);

   }else{



      DB::table('process_log')->where('id',$data->id)->update([

         
         'remarks'=>$request->remarks,
         'log'=>$data->remarks.'-2|'

      ]);



   }



      }



      if($steps=='step-3') {



$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();

   $data=DB::table('process_log')->where('unicode',$req->unicode)->where('process',$steps)->first();

   if($data == null){

      DB::table('process_log')->insert([

         'unicode'=>$req->unicode,
         'process'=>$steps,
         'remarks'=>$request->remarks,
         'encoder'=>$loged->id

      ]);

   }else{



      DB::table('process_log')->where('id',$data->id)->update([

         
         'remarks'=>$request->remarks,
         'log'=>$data->remarks.'-3|'

      ]);



   }



      }






      if($steps=='step-5') {

      

date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');


$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();


   
$fileName = strtotime($date).'_'.$request->file('datafile')->getClientOriginalName();

$destinationPath = storage_path().'/clients/'.$req->company_id.'/'.$req->unicode;
$request->file('datafile')->move($destinationPath, $fileName);

 
DB::table('report_audit')->insert([

         'unicode'=>$req->unicode,
         'file_path'=>'clients/'.$req->company_id.'/'.$req->unicode.'/'.$fileName,
          'date'=>strtotime($date),
         'steps'=>'step5',
         'remarks'=>$request->remarks,
         'log'=>$loged->id

      ]);





      }




      if($steps=='step-6') {

date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');


$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();


$fileName = strtotime($date).'_'.$request->file('datafile')->getClientOriginalName();

$destinationPath = storage_path().'/clients/'.$req->company_id.'/'.$req->unicode;
$request->file('datafile')->move($destinationPath, $fileName);

 
DB::table('report_audit')->insert([

         'unicode'=>$req->unicode,
         'file_path'=>'clients/'.$req->company_id.'/'.$req->unicode.'/'.$fileName,
          'date'=>strtotime($date),
         'steps'=>'step6',
         'remarks'=>$request->remarks,
         'log'=>$loged->id

      ]);



      }


      if($steps=='step-7') {


date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');


$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();



   
   
$fileName = strtotime($date).'_'.$request->file('datafile')->getClientOriginalName();

$destinationPath = storage_path().'/clients/'.$req->company_id.'/'.$req->unicode;
$request->file('datafile')->move($destinationPath, $fileName);

 
DB::table('report_audit')->insert([

         'unicode'=>$req->unicode,
         'file_path'=>'clients/'.$req->company_id.'/'.$req->unicode.'/'.$fileName,
          'date'=>strtotime($date),
         'steps'=>'step7',
         'remarks'=>$request->remarks,
         'log'=>$loged->id

      ]);




      }



        if($steps=='step-8') {


date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');


$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();




   
$fileName = strtotime($date).'_'.$request->file('datafile')->getClientOriginalName();

$destinationPath = storage_path().'/clients/'.$req->company_id.'/'.$req->unicode;
$request->file('datafile')->move($destinationPath, $fileName);

 
DB::table('report_audit')->insert([

         'unicode'=>$req->unicode,
         'file_path'=>'clients/'.$req->company_id.'/'.$req->unicode.'/'.$fileName,
          'date'=>strtotime($date),
         'steps'=>'step8',
         'remarks'=>$request->remarks,
         'log'=>$loged->id

      ]);



      }

if($steps=='step-9') {


date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');
  
$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();

$fileName = $req->request_name.'_'.$request->cert_no.'_cert_'.strtotime($date).'.pdf';

$destinationPath = storage_path().'/clients/'.$req->company_id.'/'.$req->unicode.'/certificate';
$request->file('datafile')->move($destinationPath, $fileName);



      DB::table('certified')->insert([

         'unicode'=>$req->unicode,
         'cert_no'=>$request->cert_no,
         'date_from'=>$request->date_from,
         'date_to'=>$request->date_to,
         'file_path'=>'clients/'.$req->company_id.'/'.$req->unicode.'/certificate/'.$fileName,
         'uploader'=>$loged->id.'|'.strtotime($date)

      ]);

   


      DB::table('client_request')->where('unicode',$req->unicode)->update([

         'request_status'=>2
         

      ]);



      }



if($steps=='step-4') {


date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d H:i:s');
  
$loged=Auth::user();

   $req = DB::table('client_request')->where('id',$id)->first();



foreach ($request->datafile as $fls) {
   
$fileName = $fls->getClientOriginalName();

$destinationPath = storage_path().'/clients/'.$req->company_id.'/'.$req->unicode.'/reports';
$fls->move($destinationPath, $fileName);


DB::table('report_audit')->insert([

         'unicode'=>$req->unicode,
         'file_path'=>'clients/'.$req->company_id.'/'.$req->unicode.'/reports/'.$fileName,
          'date'=>strtotime($date),
         'steps'=>'step4',
         'log'=>$loged->id

      ]);


}





      }




    return back()->with('is_success', 'successfully saved');
   }

   



    public function download_cert($id=null){

        $file=DB::table('certified')->where('id',$id)->first();

    
   
      
    return response()->download(storage_path($file->file_path));
   }


   
    public function download_rep_audit($id=null){

        $file=DB::table('report_audit')->where('id',$id)->first();

    
   
      
    return response()->download(storage_path($file->file_path));
   }



   
    public function download_docu($id=null){



        $file=DB::table('client_files')->where('id',$id)->first();

   
      
    return response()->download(storage_path($file->path));
   }




    public function accept_docu($id=null){

      

      DB::table('client_files')->where('id',$id)->update([


         'status'=>2
      ]);

   
      
   return back()->with('is_success', ' Updated');
   }




    public function decline_docu($id=null){

      

      DB::table('client_files')->where('id',$id)->update([


         'status'=>3
      ]);

   
      
   return back()->with('is_success', ' Updated');
   }



   



    public function clients(){

      $companylist=DB::table('clients_company')->get();
      $companylistajax=DB::table('clients_company')->get();
      $branchlist=DB::table('clients_branches')->get();
      $storelist=DB::table('clients_store')->get();

    return view('admin.clients.clients',compact('companylist','branchlist','storelist','companylistajax'));
   }


   public function inquire(){

      $message = DB::table('clients_inquires')->Orderby('date','DESC')->simplePaginate(1);

   return view('admin.clients.inquire',compact('message'));
   }


    public function pending(){



    return view('admin.clients.pending');
   }


    public function approved(){



   return view('admin.clients.approved');
   }


public function add_company(Request $request){

dd($request);
$lastcode = DB::table('clients_company')->Orderby('company_code','DESC')->first();

if($lastcode == null){
   $maxcode=0;
}else{
   $maxcode=$lastcode->company_code;
}

$code = $maxcode+1;


DB::table('clients_company')->insert([

'company_code'=>str_pad($code, 4, '0', STR_PAD_LEFT),
'company_name'=>$request->company_name,
'company_contact'=>$request->company_no

]);

    return back()->with('is_success','Company');
   }




public function add_branches(Request $request){

$company=DB::table('clients_company')->where('company_code',$request->company_number)->first();
$lastcode = DB::table('clients_branches')->where('company_code',$request->company_number)->Orderby('branch_code','DESC')->first();

if($lastcode == null){
   $maxcode=0;
}else{
   $maxcode=$lastcode->branch_code;
}

$code = $maxcode+1;


DB::table('clients_branches')->insert([

'company_code'=>$company->company_code,
'company_name'=>$company->company_name,
'branch_code'=>str_pad($code, 4, '0', STR_PAD_LEFT),
'branch_name'=>$request->branch_name

]);

    return back()->with('is_success','Branch');
   }




public function add_store(Request $request){


      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randomu=substr(str_shuffle($permitted_chars), 0, 16); 

  

$company=DB::table('clients_branches')->where('company_code',$request->company_number)->where('branch_code',$request->branch_number)->first();

$lastcode = DB::table('clients_store')->where('company_code',$request->company_number)->where('branch_code',$request->branch_number)->Orderby('store_code','DESC')->first();

if($lastcode == null){
   $maxcode=0;
}else{
   $maxcode=$lastcode->store_code;
}

$code = $maxcode+1;

$email=$request->email.'@'.$request->domain;

DB::table('clients_store')->insert([
'uniq_code'=>$randomu,
'company_code'=>$company->company_code,
'company_name'=>$company->company_name,
'branch_code'=>$company->branch_code,
'branch_name'=>$company->branch_name,
'store_code'=>str_pad($code, 4, '0', STR_PAD_LEFT),
'store_name'=>$request->store_name,
'store_contact'=>$request->store_contact,
'store_email'=>$email,
'store_address'=>$request->address,
'store_head'=>$request->store_head,
'store_username'=>$request->username

]);

    return back()->with('is_success','Branch');
   }



public function getbranchlist(Request $request){

   $branchlist=DB::table('clients_branches')->where('company_code',$request->id)->get();

      return $branchlist;


}



public function getstorelist(Request $request){

$branch=DB::table('clients_branches')->where('id',$request->id)->first();

$stores=DB::table('clients_store')->where('company_code',$branch->company_code)->where('branch_code',$branch->branch_code)->get();



      return $stores;


}




}
