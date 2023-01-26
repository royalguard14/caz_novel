
@extends('layouts.app_admin')




@section('main-body')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Request Name: {{$request->request_name}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{$company_details->company_name}}</a></li>
            <li class="breadcrumb-item active">Company</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  


  <section class="content" style="background-color:#F8F8F8; padding-bottom: 5px;">
    <div class="container-fluid">


          <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-s1-tab" data-toggle="pill" href="#custom-content-above-s1" role="tab" aria-controls="custom-content-above-s1" aria-selected="true">Process 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s2-tab" data-toggle="pill" href="#custom-content-above-s2" role="tab" aria-controls="custom-content-above-s2" aria-selected="false">Process 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s3-tab" data-toggle="pill" href="#custom-content-above-s3" role="tab" aria-controls="custom-content-above-s3" aria-selected="false">Process 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s4-tab" data-toggle="pill" href="#custom-content-above-s4" role="tab" aria-controls="custom-content-above-s4" aria-selected="false">Process 4</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s5-tab" data-toggle="pill" href="#custom-content-above-s5" role="tab" aria-controls="custom-content-above-s5" aria-selected="true">Process 5</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s6-tab" data-toggle="pill" href="#custom-content-above-s6" role="tab" aria-controls="custom-content-above-s6" aria-selected="false">Process 6</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s7-tab" data-toggle="pill" href="#custom-content-above-s7" role="tab" aria-controls="custom-content-above-s7" aria-selected="false">Process 7</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s8-tab" data-toggle="pill" href="#custom-content-above-s8" role="tab" aria-controls="custom-content-above-s8" aria-selected="false">Process 8</a>
              </li>
                    <li class="nav-item">
                <a class="nav-link" id="custom-content-above-s9-tab" data-toggle="pill" href="#custom-content-above-s9" role="tab" aria-controls="custom-content-above-s9" aria-selected="false">Process 9</a>
              </li>

            </ul>

    
          


<div class="tab-content" id="custom-content-above-tabContent">
<br>


<div class="tab-pane fade show active" id="custom-content-above-s1" role="tabpanel" aria-labelledby="custom-content-above-s1-tab">

<div class="card card-info">
        <div class="card-header">


 <h3 class="card-title">Letter of Intent and Other Documentary Requirements</h3>
 <a href="#" data-toggle="modal" data-target="#process1Modal">  <i class="right fas fa-plus float-right"></i></a>
        </div>
        <!-- /.card-header -->

        <div class="card-body">



<div class="row">
            <div class="col-12" id="accordion">

            @foreach($files as $fs)
            <?php $doctype[$fs->id] = strtoupper($fs->letters).' - '.strtoupper($fs->description);?>
                <div class="card card-<?php echo ($fs->status=='0') ? 'warning' : '' ?><?php echo ($fs->status=='1') ? 'primary' : '' ?><?php echo ($fs->status=='2') ? 'success' : '' ?><?php echo ($fs->status=='3') ? 'danger' : '' ?> card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapse{{$fs->letters}}">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                {{strtoupper($fs->letters)}} -  {{strtoupper($fs->description)}}
                            </h4>
                        </div>
                    </a>
                    <div id="collapse{{$fs->letters}}" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p style="white-space: pre-wrap;"> {{$fs->remarks}}</p>
                               
                            @if($fs->path != null)


 <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td> <a href="{{Route('client.download_docu')}}/{{$fs->id}}">Download File</a> <br> <small><i>Uploaded: {{date('F j, Y H:i:s',$fs->date_upload)}}</i></small></td>
                    <td></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">

                         <a href="{{Route('client.decline_docu')}}/{{$fs->id}}" class="btn btn-danger btn-lg"><i class="fas fa-times"></i></a>
                        <a href="{{Route('client.accept_docu')}}/{{$fs->id}}" class="btn btn-success btn-lg"><i class="fas fa-check"></i></a>
                       
                      </div>
                    </td>

                </tbody>
              </table>




                           
                            @endif
                        </div>
                    </div>
                </div>
              @endforeach

            </div>
        </div>
        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>








<div class="modal fade" id="process1Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-1" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">

<div class="row">
  
  <div class="col-lg-12">
      <div class="form-group">
                                     
                    
                <div class="form-group">
                  <label>Select Document</label>
                   {!!Form::select('type',$doctype,null,['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}
                   
                </div>
                <!-- /.form-group -->
             

                  </div>


  </div>
          </div>

<div class="row">
  
  <div class="col-lg-12">
      <div class="form-group">
                    <label>Upload File Report</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".pdf" required multiple>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>





          </div>




    <div class="row">
                


                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('remarks','Remarks: ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 
                </div>



            </div>



          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->










</div>




<div class="tab-pane fade show" id="custom-content-above-s2" role="tabpanel" aria-labelledby="custom-content-above-s2-tab">

 <div class="card card-info">
        <div class="card-header">
 <h3 class="card-title">Orientation of Applicant on the Halal Certification Guidelines and Procedures</h3>
 <a href="#" data-toggle="modal" data-target="#process2Modal">  <i class="right fas fa-plus float-right"></i></a>
        </div>
        <!-- /.card-header -->

        <div class="card-body">

<?php
$step2=DB::table('process_log')->where('unicode',$request->unicode)->where('process','step-2')->first();
?>
<p style="white-space: pre-wrap;">@if($step2!=null){{$step2->remarks}}@endif</p>
        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>





<div class="modal fade" id="process2Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-2" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">

            <div class="row">
                


                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('remarks','Remarks: ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 
                </div>



            </div>

          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


</div>


<div class="tab-pane fade show" id="custom-content-above-s3" role="tabpanel" aria-labelledby="custom-content-above-s3-tab">

 <div class="card card-info">
        <div class="card-header">


 <h3 class="card-title">Audit on the Product/Establishment</h3>
 <a href="#" data-toggle="modal" data-target="#process3Modal">  <i class="right fas fa-plus float-right"></i></a>
        </div>
        <!-- /.card-header -->

        <div class="card-body">


<?php
$step3=DB::table('process_log')->where('unicode',$request->unicode)->where('process','step-3')->first();
?>
<p style="white-space: pre-wrap;">@if($step3!=null){{$step3->remarks}}@endif</p>
        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>





<div class="modal fade" id="process3Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-3" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">

            <div class="row">
                


                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('remarks','Remarks: ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 
                </div>



            </div>

          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



</div>


<div class="tab-pane fade show" id="custom-content-above-s4" role="tabpanel" aria-labelledby="custom-content-above-s4-tab">

 <div class="card card-info">
        <div class="card-header">
 <h3 class="card-title">Findings and Report</h3>
 <a href="#" data-toggle="modal" data-target="#process4Modal">  <i class="right fas fa-plus float-right"></i></a>


        </div>
        <!-- /.card-header -->

        <div class="card-body">



<?php
$step4=DB::table('report_audit')->where('unicode',$request->unicode)->where('steps','step4')->orderby('id','DESC')->take(3)->get();
?>
@foreach($step4 as $row)

<?php $filename=explode("/", $row->file_path) ?>
<p><a href="{{Route('client.download_rep_audit')}}/{{$row->id}}">{{$filename[4]}}</a></p>
<br>
@endforeach
        
        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>
       




<div class="modal fade" id="process4Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-4" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">



<div class="row">
  
  <div class="col-lg-12">
      <div class="form-group">
                    <label>Upload File Report</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile[]" id="customFile" accept=".pdf" required multiple>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>



          </div>

          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




</div>


<div class="tab-pane fade show" id="custom-content-above-s5" role="tabpanel" aria-labelledby="custom-content-above-s5-tab">
 <div class="card card-info">
        <div class="card-header">
<h3 class="card-title">Halal Committee on Certification</h3>
<a href="#" data-toggle="modal" data-target="#process5Modal">  <i class="right fas fa-plus float-right"></i></a>

        </div>
        <!-- /.card-header -->

        <div class="card-body">

     <?php
$step5=DB::table('report_audit')->where('unicode',$request->unicode)->where('steps','step5')->orderby('id','DESC')->first();

?>
 
@if($step5)
<p style="white-space: pre-wrap;"> {!!$step5->remarks!!}</p>
<hr>
<a href="{{Route('client.download_rep_audit')}}/{{$step5->id}}">Download File!</a>
<br>
<small><i>Uploaded: {{date('F j, Y H:i:s',$step5->date)}}</i></small>

@endif
   
  

        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>
    



<div class="modal fade" id="process5Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-5" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">


           <div class="row">
  
  <div class="col-lg-12">
      <div class="form-group">
                    <label>Upload Final Report (PDF)</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".pdf" required>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>



          </div>


            <div class="row">
                
                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('remarks','Remarks: ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 
                </div>
            </div>

          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->









</div>


<div class="tab-pane fade show" id="custom-content-above-s6" role="tabpanel" aria-labelledby="custom-content-above-s6-tab">

 <div class="card card-info">
        <div class="card-header">
<h3 class="card-title">Ulama Council (Shariah Advisory Council)</h3>
<a href="#" data-toggle="modal" data-target="#process6Modal">  <i class="right fas fa-plus float-right"></i></a>

        </div>
        <!-- /.card-header -->

        <div class="card-body">
<?php
$step6=DB::table('report_audit')->where('unicode',$request->unicode)->where('steps','step6')->orderby('id','DESC')->first();
?>
 
@if($step6)
<p style="white-space: pre-wrap;"> {{$step6->remarks}}</p>
<hr>
<a href="{{Route('client.download_rep_audit')}}/{{$step6->id}}">Download File!</a>
<br>
<small><i>Uploaded: {{date('F j, Y H:i:s',$step6->date)}}</i></small>
@endif

        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>





<div class="modal fade" id="process6Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-6" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">


              
           <div class="row">
  
  <div class="col-lg-12">
      <div class="form-group">
                    <label>Upload FATWA Resolution (PDF)</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".pdf" required>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>



          </div>



            <div class="row">
                
                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('remarks','Remarks: ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 
                </div>
            </div>

          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->










</div>


<div class="tab-pane fade show" id="custom-content-above-s7" role="tabpanel" aria-labelledby="custom-content-above-s7-tab">
 <div class="card card-info">
        <div class="card-header">
<h3 class="card-title">Approved / Disapproved</h3>
 <a href="#" data-toggle="modal" data-target="#process7Modal">  <i class="right fas fa-plus float-right"></i></a>

        </div>
        <!-- /.card-header -->

        <div class="card-body">


          <?php
$step7=DB::table('report_audit')->where('unicode',$request->unicode)->where('steps','step7')->orderby('id','DESC')->first();
?>
 
@if($step7)
<p style="white-space: pre-wrap;"> {{$step7->remarks}}</p>
<hr>
<a href="{{Route('client.download_rep_audit')}}/{{$step7->id}}">Download File!</a>
<br>
<small><i>Uploaded: {{date('F j, Y H:i:s',$step7->date)}}</i></small>
@endif




        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>






<div class="modal fade" id="process7Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-7" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">


           <div class="row">
  
  <div class="col-lg-12">
      <div class="form-group">
                    <label>Upload Notice of Approval (PDF)</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".pdf" required>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>



          </div>




            <div class="row">
                


                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('remarks','Remarks: ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 
                </div>



            </div>

          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


</div>


<div class="tab-pane fade show" id="custom-content-above-s8" role="tabpanel" aria-labelledby="custom-content-above-s8-tab">

 <div class="card card-info">
        <div class="card-header">
<h3 class="card-title">Fees and Charges</h3>
 <a href="#" data-toggle="modal" data-target="#process8Modal">  <i class="right fas fa-plus float-right"></i></a>

        </div>
        <!-- /.card-header -->

        <div class="card-body">



          <?php
$step8=DB::table('report_audit')->where('unicode',$request->unicode)->where('steps','step8')->orderby('id','DESC')->first();
?>
 
@if($step8)
<p style="white-space: pre-wrap;"> {{$step8->remarks}}</p>
<hr>
<a href="{{Route('client.download_rep_audit')}}/{{$step8->id}}">Download File!</a>
<br>
<small><i>Uploaded: {{date('F j, Y H:i:s',$step8->date)}}</i></small>
@endif



        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>





<div class="modal fade" id="process8Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-8" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">



                <div class="row">
  
  <div class="col-lg-12">
      <div class="form-group">
                    <label>Upload Assessment of Fees (PDF)</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".pdf" required>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>



          </div>



            <div class="row">
                


                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('remarks','Remarks: ')!!}                       
                    {!!Form::textarea('remarks','',['class'=>'form-control','placeholder'=>'Details','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('remarks')) <p class="help-block" style="color:red;">{{ $errors->first('remarks') }}</p> @endif
                  </div> 
                </div>



            </div>

          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->






</div>


<div class="tab-pane fade show" id="custom-content-above-s9" role="tabpanel" aria-labelledby="custom-content-above-s9-tab">
 <div class="card card-info">
        <div class="card-header">
<h3 class="card-title">Issuance of a Halal Certificate</h3>
 <a href="#" data-toggle="modal" data-target="#process9Modal">  <i class="right fas fa-plus float-right"></i></a>


        </div>
        <!-- /.card-header -->

        <div class="card-body">

    

@if($step9 != null)

  <div class="row">
                

                <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('cert_no','Certification Number: ')!!}
               
                    <p><a href="{{Route('client.download_cert')}}/{{$step9->id}}" target="_blank">{{$step9->cert_no}}</a></p>
                 
                    
                  </div> 
                </div>
             </div>


            <div class="row">

              <div class="col-lg-6">

                    <div class="form-group">
                    {!!Form::label('date_from','Date from: ')!!}                       
                    <p>{{date('F j, Y',strtotime($step9->date_from))}}</p>
                  </div> 
                </div>

                  <div class="col-lg-6">

                    <div class="form-group">
                    {!!Form::label('date_to','Date To: ')!!}                    
                    <p>{{date('F j, Y',strtotime($step9->date_to))}}</p>
                  </div> 
                </div>



            </div>
            <hr>
            Uploaded by: ID: {{$step9->uploader}}


@endif


        </div>
        <!-- /.tab-content -->

        <!-- /.card-body -->
      </div>






<div class="modal fade" id="process9Modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<form action="{{Route('client.process.update')}}/{{$request->id}}/step-9" method="POST" enctype="multipart/form-data">
    @csrf
            <div class="modal-body">

            <div class="row">
                

                <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('cert_no','Certification Number: ')!!}                       
                    {!!Form::text('cert_no','',['class'=>'form-control','placeholder'=>'.......','required'])!!}                                              
                    @if ($errors->has('cert_no')) <p class="help-block" style="color:red;">{{ $errors->first('cert_no') }}</p> @endif
                  </div> 
                </div>
             </div>




            <div class="row">

              <div class="col-lg-6">

                    <div class="form-group">
                    {!!Form::label('date_from','Date from: ')!!}                       
                    {!!Form::date('date_from','',['class'=>'form-control','required'])!!}                                              
                    @if ($errors->has('date_from')) <p class="help-block" style="color:red;">{{ $errors->first('date_from') }}</p> @endif
                  </div> 
                </div>

                  <div class="col-lg-6">

                    <div class="form-group">
                    {!!Form::label('date_to','Date To: ')!!}                       
                    {!!Form::date('date_to','',['class'=>'form-control','required'])!!}                                              
                    @if ($errors->has('date_to')) <p class="help-block" style="color:red;">{{ $errors->first('date_to') }}</p> @endif
                  </div> 
                </div>

            </div>



<div class="row">
  
  <div class="col-lg-6">
      <div class="form-group">
                    <label>File input</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".pdf" required>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>



          </div>
          
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
</form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




</div>




  </div>
 <!-- /.card-body -->

  


    </div>

  </div><!--warop-->



</section>



@endsection













