
 @extends('layouts.app_admin')




@section('main-body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Access Control</h1>
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

 

            <div class="card card-info">

              <div class="card-header"> 
                <h2 class="card-title">Group Lists</h2>       
                <a href="#">  <i class="right fas fa-plus float-right"></i></a>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Authority</th>
                    <th>Access</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($role as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->group}}</td>
                 
                    <td>{{$row->modules}}</td>
                    
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


</section>
  @endsection

