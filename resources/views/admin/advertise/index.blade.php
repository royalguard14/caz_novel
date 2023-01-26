

@extends('layouts.app_admin')




@section('main-body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Advertisement</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">General Setup</a></li>
              <li class="breadcrumb-item active">Advertisement</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



 <section class="content">
  <div class="container-fluid">

 

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Advertisement Lists</h3>
                 <a href="#" data-toggle="modal" data-target="#encodeAdvertise">  <i class="right fas fa-plus float-right"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                   <tr>
                    <th>Image</th>
                    <th>Company</th>
                    <th>Branch</th>
                    <th>Store</th>
                    <th>Start Post</th>
                    <th>End Post</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($data as $row)
                      
                    <?php
                    $datestart = date('F j, Y',strtotime($row->date_start));
                    $dateend = date('F j, Y',strtotime($row->date_end));
                     $type=encrypt('advertise,'.$row->id);
                  ?>
                  <tr>
                    <td><img src="{{asset($row->image)}}"  width="100%" height="50" style="object-fit: cover;"></td>
                   <td>{{$row->company_code}}</td>
                   <td>{{$row->branch_code}}</td>
                   <td>{{$row->store_code}}</td>
                   <td>{{$datestart}}</td>
                   <td>{{$dateend}}</td>
                   @if($row->status == 1)
                   <td>Approved</td>
                   @else
                    <td>Pending</td>
                   @endif


                     <td class="align-middle  text-center">
                      <div class="btn-group ">
                        <a href="#" data-toggle="modal" data-target="#editAdvertise" id="{{$row->id}}" onclick="advertise(this)" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="{{Route('admin.status')}}/adds/{{$row->id}}" class="btn btn-info"><i class="fas <?php echo ($row->status=='1') ? 'fa-eye-slash' : 'fa-eye' ?>"></i></a>
                        <a href="{{Route('admin.delete')}}/{{$type}}" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this advertisement?')" ><i class="fas fa-trash"></i></a>
                      </div>
                    </td>


                  </tr>
                 @endforeach
             
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>

  </div>


</div>


</section>

<div class="modal fade" id="encodeAdvertise">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
<form method="POST" action="{{Route('advertise_add')}}" enctype="multipart/form-data">   
                @csrf


            </div>
            <div class="modal-body">
             



 <div class="row">
<div class="col-lg-4">

 
 <div class="form-group">
                    {!!Form::label('company','Company Name')!!}                       
                    {!!Form::text('company','',['class'=>'form-control','placeholder'=>'Enter Company Name','required'])!!}                                              
                    @if ($errors->has('company')) <p class="help-block" style="color:red;">{{ $errors->first('company') }}</p> @endif
                </div> 

</div>
<div class="col-lg-4">

 <div class="form-group">
                    {!!Form::label('branch','Branch')!!}                       
                    {!!Form::text('branch','',['class'=>'form-control','placeholder'=>'Enter City','required'])!!}                                              
                    @if ($errors->has('branch')) <p class="help-block" style="color:red;">{{ $errors->first('branch') }}</p> @endif
                </div> 
</div>



<div class="col-lg-4">
   <div class="form-group">
                    {!!Form::label('store','Store Address')!!}                       
                    {!!Form::text('store','',['class'=>'form-control','placeholder'=>'Enter Store Address','required'])!!}                                              
                    @if ($errors->has('store')) <p class="help-block" style="color:red;">{{ $errors->first('store') }}</p> @endif
                </div> 

</div>



</div>


<div class="row">
  
  <div class="col-lg-6">
      <div class="form-group">
                    <label>File input</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".jpg,.png" required>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>
  <div class="col-lg-3">
   <!-- Date -->
                <div class="form-group">
                  <label>Date Start:</label>
                
                        <input type="date" class="form-control" name="datestart" required>
               
                </div>
  </div>
    <div class="col-lg-3">
  <!-- Date -->
                <div class="form-group">
                  <label>Date End:</label>
                 
                        <input type="date" class="form-control" name="dateend" required>
                       
                  
                </div>
  </div>

</div>


             

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->





<div class="modal fade" id="editAdvertise">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title">Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             
<form method="POST" action="{{Route('admin.update')}}" enctype="multipart/form-data">   
                @csrf


              </button>
            </div>
            <div class="modal-body">
             



 <div class="row">
<div class="col-lg-4">

 
 <div class="form-group">
                    {!!Form::label('company','Company Name')!!}                       
                    {!!Form::text('company','',['class'=>'form-control','placeholder'=>'Enter Company Name','id'=>'company_code'])!!}                                              
                    @if ($errors->has('company')) <p class="help-block" style="color:red;">{{ $errors->first('company') }}</p> @endif
                </div> 

</div>
<div class="col-lg-4">

 <div class="form-group">
                    {!!Form::label('branch','Branch')!!}                       
                    {!!Form::text('branch','',['class'=>'form-control','placeholder'=>'Enter City','id'=>'branch_code'])!!}                                              
                    @if ($errors->has('branch')) <p class="help-block" style="color:red;">{{ $errors->first('branch') }}</p> @endif
                </div> 
</div>



<div class="col-lg-4">
   <div class="form-group">
                    {!!Form::label('store','Store Address')!!}                       
                    {!!Form::text('store','',['class'=>'form-control','placeholder'=>'Enter Store Address','id'=>'store_code'])!!}                                              
                    @if ($errors->has('store')) <p class="help-block" style="color:red;">{{ $errors->first('store') }}</p> @endif
                </div> 

</div>



</div>


<div class="row">
  
  <div class="col-lg-6">
      <div class="form-group">
                    <label>File input</label>
                   
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="datafile" id="customFile" accept=".jpg,.png">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                  </div>


  </div>
  <div class="col-lg-3">
   <!-- Date -->
                <div class="form-group">
                  <label>Date Start:</label>
                
                        <input type="date" class="form-control" name="datestart" id="datestart_xx">
               
                </div>
  </div>
    <div class="col-lg-3">
  <!-- Date -->
                <div class="form-group">
                  <label>Date End:</label>
                 
                        <input type="date" class="form-control" name="dateend" id="dateend_xx"/>
                       
                  
                </div>
  </div>

</div>


             

            </div>
            <div class="modal-footer justify-content-between">
              <input type="hidden" name="uid" id="id">
              <input type="hidden" name="type" value="ads">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
               </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


  <script type="text/javascript">
    
function advertise(elem){

        var x = elem.id;

        $.ajax({

            type:"POST",
            dataType: 'json',
            data: {id: x},
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ route('ajax.advertise_id') }}",
            success: function(data){ 

                   
                 $('#id').val(data['id']);
                $('#company_code').val(data['company_code']);                
                $('#branch_code').val(data['branch_code']);
                $('#store_code').val(data['store_code']);
                $('#datestart_xx').val(data['date_start']);
                $('#dateend_xx').val(data['date_end']);
              
            }    
        });
      
    }



  </script>
  @endsection

