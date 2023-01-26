@extends('layouts.app_admin')




@section('main-body')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Configuration</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#addaccount">Register</a></li>
            <li class="breadcrumb-item active">Configuration</li>
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



            
          <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
              <div class="card-header text-muted border-bottom-0">
               Maintenance
              </div>
              <div class="card-body pt-0">
                <div class="row">
                 Toggle this if you want the site to go under maintenance.
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right">

        <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
              
                        <?php 
                        $mclas=DB::table('designs')->where('function','maintenance')->first();
                          if ($mclas->class == '1') { 
                             $ret=true;
                        }
                        else{
                             $ret=false;
                        }
                    ?>
     {{ Form::checkbox('cmaintenance',$mclas->class, $ret,['class'=>'custom-control-input','id'=>'customSwitch3','onclick'=>'mainten(this)']) }}
                      
                      <label class="custom-control-label" for="customSwitch3"></label>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>


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


<script type="text/javascript">
    

    function mainten(elem) {
        var x = elem.value;
        $.ajax({

            type:"POST",
            dataType: 'json',
            data: {id: x},
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            url: "{{ route('ajax.maintenance') }}",
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













