<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

  <title>HICCIP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/slider1/style.css" rel="stylesheet">
  <link href="assets/vendor/slider2/style.css" rel="stylesheet">
  <link href="assets/vendor/cssmodalblur/style.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">

    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">HICCIP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{Route('index')}}">Home</a></li>

          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{Route('aboutus')}}?page=history">History</a></li>
              <li><a href="{{Route('aboutus')}}?page=commitment">Commitment</a></li>
              <li><a href="{{Route('aboutus')}}?page=president Message">President Message</a></li>
             {{--  <li><a href="/nofunction}">Officers</a></li> --}}
              
               <li><a href="{{Route('aboutus')}}?page=partners">Partners</a></li>
             
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="{{Route('halal_process')}}">Halal Process</a></li>
          <li><a class="nav-link scrollto" href="{{Route('services')}}">Services</a></li>
          {{-- <li><a class="nav-link scrollto " href="#portfolio">Activities</a></li> --}}
          <li><a class="nav-link scrollto" href="{{Route('contactus')}}">Contact</a></li>
          <li><div class="getstarted Click-here">What is Halal?</div> </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <hr>
            @yield('content')
        
    <div class="custom-model-main">
    <div class="custom-model-inner">        
  
        <div class="custom-model-wrap">
            <div class="pop-up-content-wrap">
               <h1><strong>Halal</strong></h1>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;means things or actions that are permitted or lawful in Islam, otherwise is non-halal (haram). When referred to food or non-food products, they are allowed for consumption or use as permitted based on the Shariah (Islamic) Law. This Law is derived from the Holy Qur&#39;an, the Hadith (tradition by the Prophet Muhammad Peace be upon Him), Al-Ijma (consensus of opinion of Ulama), and Qiyas (analogical deduction). Therefore, Halal food must fulfill the following conditions:</p>

<ol>
  <li>&nbsp;Does not contain any parts or by-products of animal and human that are non-halal under Shariah Law;</li>
  <li>&nbsp;Does not contain Najis (filth)</li>
  <li>&nbsp;Safe for consumption, non-poisonous, non-intoxicating or non-hazardous to health;</li>
  <li>&nbsp;Not prepared, processed, or manufactured using equipment contaminated with Najis (filth) and Haram according to Shariah Law;</li>
  <li>&nbsp;During its preparation, processing, packing, storage, and distribution, the food is physically separated from non-halal foods that might cause contamination in the process;</li>
  <li>&nbsp;Must be compliant with all government requirements as well as of those Halal guidelines set forth by HICCIP.</li>
</ol>

            </div>
        </div>  
    </div>  
    <div class="bg-overlay"></div>
</div>



    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
    $(".Click-here").on('click', function() {
      $(".custom-model-main").addClass('model-open');
    }); 
    $(".close-btn, .bg-overlay").click(function(){
      $(".custom-model-main").removeClass('model-open');
    });
    </script>

</body>
<br>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    
      <h6>Halal International Chamber of Commerce and Industries of the Philippines, Inc.</h6>
      <p></p>
      <div class="social-links">
       {{-- 
        <a href="https://www.facebook.com/HalalChamberPH" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a> --}}
        
       
      </div>
      <div class="copyright">
        
      </div>
      <div class="credits">
        
       
      </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</html>
