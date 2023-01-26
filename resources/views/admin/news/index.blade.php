@extends('layouts.app_admin')




@section('main-body')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">News</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">General Setup</a></li>
              <li class="breadcrumb-item active">News</li>
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
                <h3 class="card-title">News Lists</h3>
                 <a href="{{Route('admin.create')}}/news/create">  <i class="right fas fa-plus float-right"></i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Arrangement</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     
                    @foreach($data as $row)
                        <?php $type=encrypt('news,'.$row->id); ?>
                  <tr>

                    <td><center><img class="img-fluid" src="{{$row->image}}" alt="no Image" width="150px" height="150px"> </center></td>
                     <td class="align-middle text-center">{{$row->title}}</td>
                    <td class="align-middle text-center">{{$row->date}}</td>
                     <td class="align-middle text-center">{{$row->status}}</td>
                     <td class="align-middle text-center">{{$row->sequence}}</td>


                     <td class="align-middle  text-center">
                      <div class="btn-group ">
                         <a href="{{Route('admin.edit')}}/news/edit/{{$row->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{Route('admin.status')}}/news/{{$row->id}}" class="btn btn-info"><i class="fas <?php echo ($row->status=='1') ? 'fa-eye-slash' : 'fa-eye' ?>"></i></a>
                      
                      
                      <?php 
                          $loged=Auth::user();
                          ?>
                        @if($loged->role == '1')
                      <a href="{{Route('admin.delete')}}/{{$type}}" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete {{$row->title}}?')" ><i class="fas fa-trash"></i></a>
                     @endif
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
  @endsection













