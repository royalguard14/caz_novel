<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halal International Chamber of Commerce and Industries of the Philippines INC.</title>
  <meta content="" name="Halal Certifier">
  <meta content="" name="Halal Certifyier, Halal PH, Halal Philippines">

  <!-- Favicons -->
   <link href="{{asset('assets/img/LOGO-ORG.png')}}" rel="icon">
  <link href="{{asset('assets/img/LOGO-ORG.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity - v4.10.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">HICCIP INC. <img src="{{asset('assets/img/photos/logo.png')}}" alt="" class="img-fluid"></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{Route ('index')}}">Home</a></li>
          <li><a  href="{{Route ('aboutus')}}"><span>About Us</span></a>
            
          </li>
           <li><a class="active" href="{{Route ('services')}}">Services</a></li>    
          
          <li><a href="{{Route ('halal_process')}}">Halal Process</a></li>
            <li><a href="#" onclick="scrollToContactUs()">Contact Us</a></li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>What we do</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Work Process Section ======= -->
    <section id="work-process" class="work-process">  
      <div class="container">

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{asset('assets/img/Website_Raw_Files/Services/1.JPG')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h2><strong><u>Halal Certification</u></strong></h2>
            <p>As one of the leading Halal ceritifying body in the Philippines, we provide affordable and internationally recognized certification services to interested companies. Our team is dedicated to proliferate the Halal industry by way of Halal certification. We conduct inspections, trainings, and consultancy through our wide range of network, partners, and experts.</p>
            
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('assets/img/Website_Raw_Files/Services/2.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h2><strong>Halal Business Promotions</strong></h2>
            <p>
              As a chamber of commerce, we promote our client's certified products and establishments to investors, consumers, partners, and affiliates in different activities and events HICCIP actively takes part in.
            </p>
            <h2><strong>Partnership and Membership</strong></h2>
            <p>
              Our aim is to be a platform where different businesses  in the Halal industry can conduct business matchmaking. This can be done by building a broader but stronger network through partnership and membership. We actively participate in different events and activities with the hopes of securing different opportunities and also extending opportunities we can offer.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{asset('assets/img/Website_Raw_Files/Services/3.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h2><strong>Social Services</strong></h2>
            <p>Our engagement is not only limited to clients and investors but also to members of different communities - with the help of our members and partners, we lend a helping hand and organize different social programs to help our fellow Muslims and other communities that are in need.</p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{asset('assets/img/Website_Raw_Files/Services/4.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h2><strong>Education Programs</strong></h2>
            <p>With the help of our affiliates and members from the academe sector, we organize different academic activities, this includes raising Halal awareness among communities. In partnership with different academic institutions, part of our program is to offer scholarships to  students that are in need. 
            </p>
          </div>
        </div>

        
    </section><!-- End Work Process Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>HICCIP INC.</h3>
            <p>Halal International Chamber of Commerce and Industries of the Philippines</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
             <li><a href="{{Route ('index')}}">Home</a></li>
          <li><a  href="{{Route ('aboutus')}}">About</a>
            
          </li>
           <li><a  href="{{Route ('services')}}">Services</a></li>    
          
          <li><a href="{{Route ('halal_process')}}">Halal Process</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Unit 701 Jafer Place Bldg. 19 Eisenhower Street <br>
              Greenhills San Juan City 1504<br>
              Philippines <br>
              <strong>Phone:</strong> +632-7751-8533<br>
              <strong>SMART:</strong> +63-970-247-1714<br>
              <strong>GLOBE:</strong> +63-927-584-6963<br>
              <strong>Email:</strong> info@halalchamber.com.ph<br>
            </p>

            <div class="social-links">
              <a href="http://www.facebook.com/HalalChamberPH" class="facebook"><i class="bi bi-facebook"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Visit US </h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15443.579324180075!2d121.04031058068257!3d14.605066437591656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7d94214197f%3A0x2c6c9f179290b84d!2sJafer%20Place!5e0!3m2!1sen!2sph!4v1663742646540!5m2!1sen!2sph" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong><span>Halal International Chamber of Commerce and Industries of the Philippines, Inc.</span></strong>
      <br>
       
      </div>
      
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script type="text/javascript">
  function scrollToContactUs() {
    var scrollDiv = document.getElementById("footer").offsetTop;
window.scrollTo({ top: scrollDiv, behavior: 'smooth'});
  }


</script>

</body>

</html>