<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Valera Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1>{{$hero['header']}}</h1>
      <h2>{{$hero['desc']}}</h2>
<hr>
          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="ENTER BOOK NAME">
            &nbsp; &nbsp;
            <a href="#about" class="btn-get-started scrollto" style="margin-top:1px">Search</a>
          </form>

     
      
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Valera</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#library">Library</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#joinus">Join Us</a></li>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">
   
    <!-- ======= Portfolio Section ======= -->
    <section id="library" class="portfolio">
      <div class="container">

        <div class="section-title" style="padding-bottom:0px">
          <h2>Library</h2>
        
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          @foreach($genre as $filter)
            <li data-filter=".filter-{{$filter->name}}">{{mb_strtoupper($filter->name)}}</li>
          @endforeach
         
        </ul>

        <div class="row portfolio-container">


@foreach($books as $book)
          <div class="col-lg-2 col-md-6 portfolio-item border filter-{{$book->genre->name}}">
            <div class="portfolio-img"><img src="{{$book->cover}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h6>{{$book->title}}</h6>
             
              <a href="{{$book->cover}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$book->name}}"><i class="bx bx-zoom-in"></i></a>


               <a href="{!!Route('books.index')!!}?details_book={{$book->id}}-{{$book->genre_id}}-{{$book->code}}" class="details-link" title="Read"><i class="bx bx-book-reader"></i></a>
            </div>
          </div>
    @endforeach
          


        </div>

      </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= Team Section ======= -->
    <section id="about" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Developer</h2>
        </div>

        <div class="row">


@foreach($developer as $dev)
 <?php 
            $socmed=explode("|", $dev->socmed);

            ?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{$dev->image}}" class="img-fluid" alt="">
                <div class="social">
                  <a target="_blank" href="{{$socmed[0]}}"><i class="bi bi-twitter"></i></a>
                  <a target="_blank" href="{{$socmed[1]}}"><i class="bi bi-facebook"></i></a>
                  <a target="_blank" href="{{$socmed[2]}}"><i class="bi bi-instagram"></i></a>
                  <a target="_blank" href="{{$socmed[3]}}"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{$dev->name}}</h4>
                <span>{{$dev->position}}</span>
              </div>
            </div>
          </div>

  @endforeach       


        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div>
 

          <iframe style="border:0; width: 100%; height: 270px;"  src="{{$map->details}}" frameborder="0" allowfullscreen ></iframe>

        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address" >
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p style="white-space: pre-wrap;">{{$location->details}}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p style="white-space: pre-wrap;">{{$email->details}}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p style="white-space: pre-wrap;">{{$phone->details}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    

  </main><!-- End #main -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>