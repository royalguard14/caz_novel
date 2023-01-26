<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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

<style type="text/css">
  
.user-block .username,
.user-block .description,
.user-block .comment {
  display: block;
  
}

.post {
  border-bottom: 1px solid #adb5bd;
  color: #666;
  margin-bottom: 15px;
  padding-bottom: 15px;
}

</style>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="{{Route('home.index')}}">Valera</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    
      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
<main id="main">


    <!-- ======= Breadcrumbs ======= -->
   

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <iframe src="{{$data->path}}" height="520px" width="100%"></iframe>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{$data->title}}</h3>
              <ul>
                <li><strong>Author</strong>: {{$data->author}}</li>
                <li><strong>Genre</strong>: {{$data->genre->name}}</li>
                <li><strong>Uploaded </strong>: {{$data->created_at}}</li>
                <li><strong>Hashtags</strong>:


                  <?php
                  $hashtag=explode(",", $data->hashtag);
                  ?>
                @foreach($hashtag as $hash)
                 <a href="#">#{{$hash}}</a>  
                @endforeach

               </li>
              </ul>
            </div>
            <div class="portfolio-description">
           
                  <div class="comment-section" style=" overflow: auto; height: 300px; background: #f3f3f3; padding:5px" >

                    @foreach($comment as $post)
                    <?php 
                    $timeago=App\Models\ExtraMe::timeago($post->created_at);
                    ?>


 <!-- Post -->
                    <div class="post clearfix " >
                      <div class="user-block">
                       
                        <span class="username">
                          <a href="#">{{$post->name}}</a> <small> - {{$timeago}} </small>
                          
                        </span>
                       
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$post->message}}
                      </p>

                    </div>
                    <!-- /.post -->



                    @endforeach


                  </div>
                   <hr>
                   <input style="border:0;outline:0; focus:outline:none!important;" class=" form-control-sm" type="text" id="mystery_name" placeholder="* Mysterios Name" maxlength="16">
                        <div class="input-group input-group-sm mb-0">

                          <input class="form-control form-control-sm" placeholder="Comment" id="message">
                          <div class="input-group-append">
                            &nbsp;
                            <button id="{{$data->id}}" onclick="PostComment(this)" class="btn btn-danger">POST</button>
                          </div>
                        </div>
                  

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    

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

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript">
  function PostComment(elem) {
    var code = elem.id;
    var name = document.getElementById('mystery_name').value;
    var comment = document.getElementById('message').value;

    if ( code == "" || name == ""  || comment == "") {

      alert('Please Input All Required data');

    }else{

       $.ajax({
            url: "{{Route('postcomment')}}",
            type:"post",
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            data: {code:code,name:name,comment:comment},
            success: function(data){            
          
                 $('.comment-section').empty().append(data);

                 document.getElementById('mystery_name').value = null;
                 document.getElementById('message').value=null;

            }    
        });

    }
    
    

    
  }
</script>

</body>

</html>