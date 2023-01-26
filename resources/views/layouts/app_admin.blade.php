<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}" />

     <?php 
$routeUri = Route::currentRouteName();
$title=DB::table('modules')->where('default_url',$routeUri)->first();

?>
  <title>Zear</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assetsx/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/summernote/summernote-bs4.min.css')}}">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/toastr/toastr.min.css')}}">

   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assetsx/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assetsx/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


  <script src="{{asset('assetsx/vendor/ckeditor/ckeditor.js')}}"></script>


   <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assetsx/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assetsx/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
     <img class="animation__shake" src="{{asset('assetsx/zear_logo.png')}}" alt="Zear_logo" height="200" width="200">
  </div>


@include('layouts.adminrightnavi')
@include('layouts.adminnavi')

@yield('main-body')

        
 </div>

</body>

<footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 
        <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assetsx/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assetsx/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assetsx/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assetsx/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assetsx/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assetsx/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assetsx/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assetsx/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assetsx/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assetsx/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assetsx/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assetsx/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assetsx/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assetsx/dist/js/pages/dashboard.js')}}"></script>

<!-- bs-custom-file-input -->
<script src="{{asset('assetsx/plugins/bs-custom-file-input/bs-custom-file-input.js')}}"></script>

<!-- SweetAlert2 -->
<script src="{{asset('assetsx/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Toastr -->
<script src="{{asset('assetsx/plugins/toastr/toastr.min.js')}}"></script>

  <!-- DataTables  & Plugins -->
<script src="{{asset('assetsx/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assetsx/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('assetsx/plugins/select2/js/select2.full.min.js')}}"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });


    $('#DataTable-Genre').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });


  
  });

        $(document).ready(function(){
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
let mes = document.getElementById('alert').value;
if(mes.includes("success")){

  toastr.success(mes);
}else if(mes.includes("error")){

  toastr.error(mes);
}else if(mes.includes("warning")){

  toastr.warning(mes);
}else{

  toastr.info(mes);
}
     

  });

</script>


<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>


            
     <script>
$(function () {


 $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


  bsCustomFileInput.init();
});


var max_fields      = 10; //maximum input boxes allowed
var wrapper       = $(".input_fields_wrap"); //Fields wrapper
var add_button      = $(".add_field_button"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
    if(x < max_fields){ //max input box allowed
        x++; //text box increment
        $(wrapper).append('<div class="input-group mb-3"><input placeholder="Product Name | Code" type="text" name="items[]" class="form-control" required><div class="input-group-append"><button class="btn btn-outline-danger remove_field" type="button">Remove</button></div></div>'); //add input box
    }
});

$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
    });



</script>

</html>
