
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
          {{-- <li><a class="getstarted scrollto" href="{{Route('index')}}">INQUIRE</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->