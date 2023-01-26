
 @extends('layouts.app_admin')




@section('main-body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">GENRE MAINTENANCE</h1>

@include('alert')
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Access Control</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



 <section class="content">
  <div class="container-fluid">

 

<div class="row">
  <div class="col-lg-4">

<div class="card card-info">

              <div class="card-header"> 
                <h2 class="card-title">ADD NEW!</h2>       
    
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {!! Form::open(array('route'=>'genre.store','methd'=>'POST')) !!}

                <div class="form-group">
                        {!! Form::label('name','Name') !!}
                        {!! Form::text('name','',['class'=>'form-control','required'=>'required','placeholder'=>'Enter Name Here']) !!} 
                    </div>  

                    <div class="form-group">
                        {!! Form::label('descr','Description') !!}
                        {!! Form::textarea('descr',null,['class'=>'form-control','required'=>'required','cols'=>3,'rows'=>4]) !!} 
                    </div> 

                    
                    
                                       
                    <div class="form-group">                        
                        {!! Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'btn btn-primary')) !!}
                    </div>                          
                             
                {!! Form::close() !!}
              </div>
              <!-- /.card-body -->
            </div>

  </div>
  <div class="col-lg-8">


<div class="card card-info">

              <div class="card-header"> 
                <h2 class="card-title">Genre Lists</h2>       
        
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="DataTable-Genre" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                 
                    <td>{{$row->desc}}</td>
                    
                    <td>X</td>
                  </tr>
                 @endforeach

                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>

  </div>
</div>
            

  </div>


</div>


</section>
  



  @endsection


