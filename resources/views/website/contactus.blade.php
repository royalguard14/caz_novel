
@extends('layouts.app')

@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
 <div class="d-flex justify-content-between align-items-center">
          <h2>CONTACT US</h2>
          <ol>
            <li><a href="{{Route('index')}}">Home</a></li>
            <li>INQUIRIES</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    
    <section class="inner-page contact" id="contact" >
      <div class="container">

<div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>701 Jafer Place Bldg. 19 Eisenhower Street, Greenhills San Juan City 1504 Metro Manila, Philippines</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><b>For inquiries:</b>
                  <br>info@halalchamber.com.ph
              <br><br><b>For halal certification concerns:</b>
              <br>certification@halalchamber.com.ph
              <br>alex.hiccip2013@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><b>Telephone:</b>
                <br>+63.2.7751.8533
                <br><br>
                <b>Smart:</b>
                <br>(+63)970-247-1714
                <br><br>
                <b>Globe:</b>
                <br>(+63)927-584-6963
              </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3860.894821169732!2d121.049033!3d14.605066999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c6c9f179290b84d!2sJafer%20Place!5e0!3m2!1sen!2sau!4v1616694847124!5m2!1sen!2sau" frameborder="0" style="border:0; width: 100%; height: 150px;" allowfullscreen></iframe>

            </div>

          </div>

  <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{Route('send')}}" method="post" class="php-email-form">

              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
            @if (session('is_success'))
                  <div class="sent-message">Your message has been sent. Thank you!</div>
            
              @endif
               
              
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>


            
          </div>




        </div>

      

      </div>
    </section>

@endsection
