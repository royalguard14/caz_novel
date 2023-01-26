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
          <h2>OFFICERS</h2>
          <ol>
               <li><a href="{{Route('index')}}">HOME</a></li>
            <li>ABOUT US</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
       
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  onchange="officer(this.value)">
  <option value="bod">BOARD OF DIRECTORS </option>
  <option value="eo">EXECUTIVE OFFICERS </option>
  <option value="os">OFFICE STAFF </option>
  <option value="dh">DIVISION HEAD </option>
  <option value="mc1">MANAGEMENT COMMITTEES </option>
  <option value="ahc">AUDITORS ON HALAL CERTIFICATION </option>
  <option value="chc">COMMITTEE ON HALAL CERTIFICATION </option>
  <option value="uc">SHARIAH ADVISORY COUNCIL (Ulama Council) </option>
  <option value="cc">CRISIS COMMITTEE/COMMITTEE ON ELECTION </option>
  <option value="c">CONSULTANTS </option>
  <option value="fc">FINANCE COMMITTEE </option>
  <option value="mc">MONITORING COMMITTEE </option>

  </select>
  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

    

      </div>
    </section>



<!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      

      <div class="container">
    
        <div class="row no-gutters" id="officers">
        </div>

      </div>

    </section><!-- End Why Us Section -->
  </main><!-- End #main -->
@include('layouts.webfooter')

</body>

<script type="text/javascript">


    function officer(val) {

      var x = val;


    
        $.ajax({
            url: "{{ route('getsetofficer') }}",

            type:"POST",
            data: {id:x,_token:$('#token').val()},
            success: function(data){            
            
            $('#officers').empty().append(data);
           
            }    
        });



    }



</script>


</html>