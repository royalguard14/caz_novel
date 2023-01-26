
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
                <h3 class="card-title">New Book</h3>
              </div>
              <div class="card-body">
                 {!!Form::open(array('route'=>'book.store','method'=>'POST','files'=>'true'))!!}
                <div class="row">
                  <div class="col-lg-6">
             <div class="form-group">

                      {!! Form::label('genre','Genre') !!}
                        {!! Form::select('genre',$genre,'',['class'=>'form-control custom-select rounded-0','required'=>'required','placeholder'=>'Select Genre ....']) !!} 
                 
                 
                </div>
                  </div>
                 
                    </div>
                    <div class="row">
                  <div class="col-lg-6">
                      
                      <div class="input-group mb-3">
                  <input type="text" name="title" class="form-control" placeholder="Title" required>
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-book "></i></span>
                  </div>
                </div> 

                  </div>

                  <div class="col-lg-6">
                      
                      <div class="input-group mb-3">
                  <input type="text" class="form-control" name="author" placeholder="Author" required>
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user "></i></span>
                  </div>
                </div> 

                  </div>

                </div>

                <div class="row">
                  
                  <div class="col-lg-12">
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="6" placeholder="Enter Briefly Description"  name="description" required></textarea>
                      </div>
                  </div>

                </div>


                 <div class="row">
                  <div class="col-lg-6">
                     <div class="form-group">
                    <label for="exampleInputFile">Cover Photo <small>*2x2</small></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="cover" class="custom-file-input" id="exampleInputFile" required  >
                        <label class="custom-file-label" for="exampleInputFile">Choose PNG file</label>
                      </div>
                      
                    </div>
                  </div>

                  </div>
                 

                 <div class="col-lg-6">
                     <div class="form-group">
                    <label for="exampleInputFile">PDF File <small>*</small></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="pdf" class="custom-file-input" id="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose PDF file</label>
                      </div>
                      
                    </div>
                  </div>

                  </div>

                  <div class="col-lg-12">
                    <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">#</span>
                  </div>
                  <input type="text" name="hashtag" class="form-control" placeholder="Separate with Comma (,)">
                </div>
                 </div>
                </div>

                

           
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               
                <button type="submit" class="btn btn-info  float-right">submit</button>
                   <button type="button"  onclick="location.href = '{{Route("book.index")}}';" class="btn btn-default">Back</button>
                </div>
            </div>
            <!-- /.card -->
              {!! Form::close() !!}


  </div>


</div>


</section>
  @endsection
