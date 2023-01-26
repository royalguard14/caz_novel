
 @extends('layouts.app_admin')




@section('main-body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Module</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modules</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



 <section class="content">
  <div class="container-fluid">

 
            <!-- Input addon -->
            <div class="card card-info">
            
              <div class="card-header">
                <h3 class="card-title">Create Module</h3>
              </div>
              <div class="card-body">
                 {!!Form::open(array('route'=>'modules.store','method'=>'POST'))!!}
                <div class="row">
                  <div class="col-lg-6">

                    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Module Name" name="module">
                </div>

                  </div>
                 

                  <div class="col-lg-6">
                  
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter Icon of the Module" name="icon">
                  <div class="input-group-append">
                    <span class="input-group-text"><a href="https://fontawesome.com/v4/icons/" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a></span>
                  </div>
                </div>   
                  </div>

                </div>

                <div class="row">
                  
                  <div class="col-lg-12">
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="6" placeholder="Enter Module Description"  name="description"></textarea>
                      </div>
                  </div>

                </div>


                 <div class="row">
                  <div class="col-lg-6">

                    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Name of Route</span>
                  </div>
                  <input type="text" class="form-control" name="routeUri">
                </div>

                  </div>
                 

                  <div class="col-lg-6">
                  
                    <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Default Url</span>
                  </div>
                  <input type="text" class="form-control" name="default_url">
                </div>
                  </div>

                </div>

                

           
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               
                <button type="submit" class="btn btn-info  float-right">submit</button>
                   <button type="submit" class="btn btn-default">Back</button>
                </div>
            </div>
            <!-- /.card -->
              {!! Form::close() !!}


  </div>


</div>


</section>
  @endsection
