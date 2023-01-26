<!DOCTYPE html>
<html lang="en">
@include('layouts.webheader')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<body>

@include('layouts.webnavi')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>REQUIREMENTS</h2>
          <ol>
               <li><a href="{{Route('index')}}">HOME</a></li>
            <li>HALAL PROCESS</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">


       <?php
       $type = array('product' => 'PRODUCTION/PRODUCT CERTIFICATION', 'establishment' => 'ESTABLISHMENT CERTIFICATION','abbattoir' => 'ABBATTOIR CERTIFICATION');
     ?>
      {!!Form::label('type','Select Data')!!}                        
      {!!Form::select('type',$type,null,['class'=>'form-select form-select-lg mb-3','placeholder'=>'Select Criteria','aria-label'=>'form-select-lg example','onchange'=>'proreq(this.value)'])!!}     
       
      
  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

    

      </div>
    </section>

<!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      

      <div class="container">
    
        <div style="background-color: white; padding: 50px; border-radius: 15px 50px 30px 5px;" class="row no-gutters" id="requirement">
           <p>No Data....</p>
        </div>

      </div>

    </section><!-- End Why Us Section -->
  </main><!-- End #main -->
@include('layouts.webfooter')

</body>

<script type="text/javascript">


    function proreq(val) {

      var x = val;


    
        $.ajax({
            url: "{{ route('requirements_selected') }}",

            type:"POST",
            data: {id:x,_token:$('#token').val()},
            success: function(data){            
            
            $('#requirement').empty().fadeOut("fast","swing",null).delay('400').fadeIn("slow","swing",null).delay('400').append(data);
           
            }    
        });



    }



</script>


</html>