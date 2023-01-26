
@extends('layouts.app_admin')




@section('main-body')
<?php use Carbon\Carbon;?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Clients Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">General Setup</a></li>
            <li class="breadcrumb-item active">Announcement</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->



  <section class="content" style="background-color:#F8F8F8; padding-bottom: 5px;">
    <div class="container-fluid">



      <div class="card card-info">
        <div class="card-header">

        </div>
        <!-- /.card-header -->

        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total Certificate</span>
                      <span class="info-box-number text-center text-muted mb-0">{{count($certified)}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total Code</span>
                      <span class="info-box-number text-center text-muted mb-0">{{count($allcode)}}</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Request Pending</span>
                      <span class="info-box-number text-center text-muted mb-0">{{count($pending)}}</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <h4>Request List</h4>


                  @foreach($requests as $req)

                   <div class="post">
                    <div class="user-block">

                      <span class="username">
                        <div class="row">
                          <div class="col-lg-10"><a href="{{Route('client.request')}}/{{$req->unicode}}">{{$req->request_name}}</a></div>
                          @if($req->request_status=='0')
                          <div class="col-lg-2" style="color:orange">Pending....</div>
                          @elseif($req->request_status=='1')
                          <div class="col-lg-2" style="color:reject">Reject</div>
                          @else
                          <div class="col-lg-2" style="color:green;">Certified!</div>
                          @endif
<?php

           {{--  $myDate2 = $req->request_datetime;
            $myDate = Carbon::now('Asia/Manila');
            $myDate = '12/08/2020';
            $diff = abs(strtotime($myDate2) - strtotime($myDate));
            
            $result = Carbon::createFromFormat('m/d/Y', $myDate)->diffForHumans(); --}}


        $myDate = date('Y-m-d H:i:s',$req->request_datetime);
        $myDate2 = Carbon::now('Asia/Manila');
          
       $newDate = Carbon::createFromFormat('Y-m-d H:i:s', $myDate2);
        //$result = Carbon::createFromFormat('Y-m-d H:i:s', $myDate)->diffForHumans($newDate);

//$result=get_time_ago();


            //$result =Carbon::now('Asia/Manila')->subMinutes(abs($diff/60))->diffForHumans();
?>



                        </div>
                      </span>
                   
                    <span class="description">{{date('F j, Y H:i:s',$req->request_datetime)}}</span>
                    </div>
                    <!-- /.user-block -->
                    <b> <small>Remarks:</small></b>
                    <p>
                      {{$req->remarks}}

                    </p>

                   {{--  <p>
                      <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                    </p> --}}
                  </div>


                  @endforeach
                  


                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> {{$data->company_name}}</h3>
              <p class="text-muted">{{$data->company_description}}</p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Company Details

                  <b class="d-block">{{$data->company_address}}<br>{{$data->company_contact}}</b>
                </p>
                <p class="text-sm">Owner
                  <b class="d-block">{{$data->company_owner}}</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Document files</h5>
             {{--  <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul> --}}
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#"  data-toggle="modal" data-target="#Newrequest" class="btn btn-sm btn-warning">Add Request</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-body -->
      </div>



    </div>

  </div>?<!--warop-->




  <div class="modal fade" id="Newrequest">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h4 class="modal-title">Request Form</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>

          </button>
        </div>
        <div class="modal-body">

         {!! Form::open(array('route'=>'client.add.request','method'=>'POST','enctype'=>'multipart/form-data')) !!}
         @csrf



    <div class="row">
          <div class="col-lg-12">

            <div class="form-group">


              <?php
              $appfor = array('halalcert' => 'Halal Certification', 'none1' => 'none1','none2' => 'none2');
            ?>
            {!!Form::label('appfor','Select Data')!!}                        
            {!!Form::select('appfor',$appfor,null,['class' =>'form-select form-select-lg mb-3 form-control','placeholder'=>'Select What Applying For','aria-label'=>'form-select-lg example','required'=>'required'])!!}     

            @if ($errors->has('appfor')) <p class="help-block" style="color:red;">{{ $errors->first('appfor') }}</p> @endif
          </div> 


        </div>                    
      </div>
      
      


         <div class="row">
          <div class="col-lg-12">

            <div class="form-group">


              <?php
              $type = array('product' => 'PRODUCTION/PRODUCT CERTIFICATION', 'establishment' => 'ESTABLISHMENT CERTIFICATION','abbattoir' => 'ABBATTOIR CERTIFICATION');
            ?>
            {!!Form::label('type','Select Data')!!}                        
            {!!Form::select('type',$type,null,['class' =>'form-select form-select-lg mb-3 form-control','placeholder'=>'Select Criteria','aria-label'=>'form-select-lg example','required'=>'required'])!!}     

            @if ($errors->has('type')) <p class="help-block" style="color:red;">{{ $errors->first('type') }}</p> @endif
          </div> 


        </div>                    
      </div>
      
      
         <div class="row">
          <div class="col-lg-12">

            <div class="form-group">


     {!!Form::label('title_name','Report Name')!!}                       
                    {!!Form::text('title_name','',['class'=>'form-control','placeholder'=>'Enter Name','required'])!!}                                              
                    @if ($errors->has('title_name')) <p class="help-block" style="color:red;">{{ $errors->first('title_name') }}</p> @endif

          </div> 


        </div>                    
      </div>






      <div class="row">
        <div class="col-lg-12">


          <button class="btn btn-outline-primary  add_field_button"><i class="fa fa-bell"></i>Add More Fields</button>
          <hr>


          <div class="input_fields_wrap" style="overflow-y: scroll; height: 150px;">



          </div>
        </div>                    
      </div>



      <div class="row">
        <div class="col-lg-12">


         
                    <div class="form-group">
                    {!!Form::label('remarks','Remakrs ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Input some data....','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 


        </div>                    
      </div>



      

    </div>


    <div class="modal-footer justify-content-between">
      {!! Form::hidden('company_uid',$data->id) !!} 
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Submit</button>
      {!!Form::close()!!}
    </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


</section>



@endsection













