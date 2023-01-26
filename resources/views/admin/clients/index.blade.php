
@extends('layouts.app_admin')




@section('main-body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clients</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



 <section class="content">
  <div class="container-fluid">

 

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Company List</h3>
                  <a href="#" data-toggle="modal" data-target="#encodeCompany">  <i class="right fas fa-plus float-right"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>Company Name</th>
                    <th>Owner</th>
                    <th>Contact</th>               
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($data as $row)
                 

                  <tr>

              
                   <td class="align-middle text-center">{{$row->company_name}}</td>
                   <td class="align-middle text-center">{{$row->company_owner}}</td>
                   <td class="align-middle text-center">{{$row->company_contact}}</td>
                
                           <td class="align-middle  text-center">
                      <div class="btn-group ">
                        <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{Route('client.profile')}}/{{$row->id}}" class="btn btn-info"><i class="fas fa-university"></i></a>
                        
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




<div class="modal fade" id="encodeCompany">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

     {!! Form::open(array('route'=>'client.create','method'=>'POST','enctype'=>'multipart/form-data')) !!}
                @csrf

            <div class="modal-body">
             
                <div class="row">
                    
                  <div class="col-lg-12">

                    <div class="form-group">
                    {!!Form::label('company','Company Name')!!}                       
                    {!!Form::text('company','',['class'=>'form-control','placeholder'=>'Enter Company Name','required'])!!}                                              
                    @if ($errors->has('company')) <p class="help-block" style="color:red;">{{ $errors->first('company') }}</p> @endif
                  </div> 
                </div>


                </div>



                 <div class="row">
                    
                  <div class="col-lg-4">

                    <div class="form-group">
                    {!!Form::label('company_desc','Description ')!!}                       
                    {!!Form::textarea('company_desc','',['class'=>'form-control','placeholder'=>'Company description','rows'=>'8','required'])!!}                                              
                    @if ($errors->has('company_desc')) <p class="help-block" style="color:red;">{{ $errors->first('company_desc') }}</p> @endif
                  </div> 
                </div>


                  <div class="col-lg-8">

                    <div class="row">
                      <div class="col-lg-12">
                        
                          <div class="form-group">
                    {!!Form::label('company_address','Address')!!}                       
                    {!!Form::text('company_address','',['class'=>'form-control','placeholder'=>'Enter complete address','required'])!!}                                              
                    @if ($errors->has('company_address')) <p class="help-block" style="color:red;">{{ $errors->first('company_address') }}</p> @endif
                  </div> 


                      </div>                    
                      </div>


                    <div class="row">
                        
                      <div class="col-lg-6">
                        
                          <div class="form-group">
                    {!!Form::label('company_person','Contact Person')!!}                       
                    {!!Form::text('company_person','',['class'=>'form-control','placeholder'=>'Enter contact person name','required'])!!}                                              
                    @if ($errors->has('company_person')) <p class="help-block" style="color:red;">{{ $errors->first('company_person') }}</p> @endif
                  </div> 


                      </div> 
                      
                      
                      
                      <div class="col-lg-6">
                        
                          <div class="form-group">
                    {!!Form::label('company_number','Contact Number')!!}                       
                    {!!Form::text('company_number','',['class'=>'form-control','placeholder'=>'Enter contact number','required'])!!}                                              
                    @if ($errors->has('company_number')) <p class="help-block" style="color:red;">{{ $errors->first('company_number') }}</p> @endif
                  </div> 


                      </div> 
                      
                      
                      
                      </div>


                    <div class="row">
                      <div class="col-lg-12">
                        
                          <div class="form-group">
                    {!!Form::label('company_owner','Owner')!!}                       
                    {!!Form::text('company_owner','',['class'=>'form-control','placeholder'=>'Enter owner name','required'])!!}                                              
                    @if ($errors->has('company_owner')) <p class="help-block" style="color:red;">{{ $errors->first('company_owner') }}</p> @endif
                  </div> 


                      </div>                    
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


</section>
  @endsection













