@extends('layouts.app_admin')




@section('main-body')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Developer</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#addaccount">Register</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->



  <section class="content">
    <div class="container-fluid">








      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">



            @foreach($data as $row)
            <?php 
            $socmed=explode("|", $row->socmed);

            ?>

          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
               {{$row->position}}
              </div>
              <div class="card-body pt-0">
                <div class="row">
                  <div class="col-7">
                    <h2 class="lead"><b>{{$row->name}}</b></h2>
                    
                    <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fab fa-twitter"></i></span> {{$socmed[0]}}</li>
                       <li class="small"><span class="fa-li"><i class="fab fa-facebook"></i></span> {{$socmed[1]}}</li>
                        <li class="small"><span class="fa-li"><i class="fab fa-instagram"></i></span> {{$socmed[2]}}</li>
                         <li class="small"><span class="fa-li"><i class="fab fa-linkedin"></i></span> {{$socmed[3]}}</li>
                    </ul>
                  </div>
                  <div class="col-5 text-center">
                    <img src="{{$row->image}}" alt="no photo" class="img-circle img-fluid">
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comments"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-user"></i> View Profile
                  </a>
                </div>
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">

      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->




  </div>


</section>



</div>



<div class="modal fade" id="addaccount">
  <div class="modal-dialog modal-lm">
    <div class="modal-content">
     
<div class="">
  <div class="card card-outline card-primary">
   
    <div class="card-body">
      
 {!!Form::open(array('route'=>'developers.store','method'=>'POST','files'=>'true'))!!}
    
        @csrf

        <div class="row">
          
          <div class="col-lg-8">
              <div class="form-group">
                    <label for="exampleInputFile">Image <small>*2x2</small></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" required  >
                        <label class="custom-file-label" for="exampleInputFile">Choose PNG file</label>
                      </div>
                      
                    </div>
                  </div>

          </div>

        </div>


             


        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        
        

        <div class="input-group mb-3">
          <input type="text" name="position" class="form-control" placeholder="Position" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-code"></span>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-6">
              <div class="input-group mb-3">
          <input type="text" name="twitter" class="form-control" placeholder="Twitter">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fab fa-twitter"></span>
            </div>
          </div>
        </div>

          </div>

           <div class="col-lg-6">

            <div class="input-group mb-3">
          <input type="text" name="facebook" class="form-control" placeholder="Facebook">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fab fa-facebook"></span>
            </div>
          </div>
        </div>

          </div>

           <div class="col-lg-6">

             <div class="input-group mb-3">
          <input type="text" name="instagram" class="form-control" placeholder="Instagram">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fab fa-instagram"></span>
            </div>
          </div>
        </div>

          </div>

           <div class="col-lg-6">

         <div class="input-group mb-3">
          <input type="text" name="linkedin" class="form-control" placeholder="Linkedin">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fab fa-linkedin"></span>
            </div>
          </div>
        </div>


          </div>

        </div>

       

         

        

        

        <div class="row">
          <div class="col-8">
            {{-- <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div> --}}
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">ADD</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection













