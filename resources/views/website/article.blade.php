
@extends('layouts.app')

@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{strtoupper($data->title)}}
           
            
          </h2>
         
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container" style="background-color:white; padding:25px; border-radius: 15px">



<?php echo htmlspecialchars_decode($data->content);?>


</div>

    </section>

@endsection
