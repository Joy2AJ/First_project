<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Template</title>
    <!-- bootstrap CSS only -->
  {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Animated CSS -->
{{-- <link rel="stylesheet" href="css/animate.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<!-- Fontawesome Css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!-- stylesheet -->
<link rel="stylesheet" href="css/style.css">
<!-- responsive -->
<link rel="stylesheet" href="css/responsive.css">

</head>
<body>
  <!-- header area start -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}"> <span>Adi</span>tya
            <!-- <img src="assets/logo/logo.png" alt="Aditya's Theme" width="120" height="44"> -->
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('service') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>
              <li class="nav-item">
                <a class="getstarted" href="#">Get Started</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  </header>

<!-- header area end -->
<!-- breadcumb area start -->
<section class="breadcumb-area">
    <div class="container text-center pt-4">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h2>Services 4 columns</h2>
                    <ul class="d-flex list-unstyled" >
                        <li>Home</li> /
                        <li>services-4-columns</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcumb area end -->
<!-- service section -->
<section class="service-4 mt-4" id="service-4">
  <div class="container ">
    <div class="row">
        <div class="col-xl-3 m-2 p-3 service-single">
            <a href="#">
                <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-1.jpg" alt="service">
            </a>
            <h4 class="text-left mt-2">Web Design</h4>
            <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
        </div>
        <div class="col-xl-3 m-2 p-3 service-single">
            <a href="#">
                <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-3.jpg" alt="service">
            </a>
            <h4 class="text-left mt-2">Content Writing</h4>
            <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
        </div>

        <div class="col-xl-3 m-2 p-3 service-single">
          <a href="#">
              <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-4.jpg" alt="service">
          </a>
          <h4 class="text-left mt-2">Software Development</h4>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
      </div>
      <div class="col-xl-3 m-2 p-3 service-single">
          <a href="#">
              <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-5.jpg" alt="service">
          </a>
          <h4 class="text-left mt-2">Wordpress Customization</h4>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
      </div>
      <div class="col-xl-3 m-2 p-3 service-single">
          <a href="#">
              <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-7.jpg" alt="service">
          </a>
          <h4 class="text-left mt-2">Digital Markrting</h4>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
      </div>
      <div class="col-xl-3 m-2 p-3 service-single">
          <a href="#">
              <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-10.jpg" alt="service">
          </a>
          <h4 class="text-left mt-2">SEO</h4>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
      </div>
      <div class="col-xl-3 m-2 p-3 service-single">
          <a href="#">
              <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-11.jpg" alt="service">
          </a>
          <h4 class="text-left mt-2">Ux/Ui Design</h4>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
      </div>
      <div class="col-xl-3 m-2 p-3 service-single">
          <a href="#">
              <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-14.jpg" alt="service">
          </a>
          <h4 class="text-left mt-2">Graphics Design</h4>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
      </div>
      <div class="col-xl-3 m-2 p-3 service-single">
        <a href="#">
            <img class="col-lg-12" style="max-width:100%; max-height:100%" src="assets/image/service/service-2.jpg" alt="service">
        </a>
        <h4 class="text-left mt-2">Web Development</h4>
        <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nobis nihil at, repellat culpa dignissimos dolorem, repellendus quae optio odio saepe numquam reprehenderit natus quisquam,....</p>
    </div>
    </div>
  </div>
</section>

<!-- CTA section Start -->
<section class="subscription">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="subscription-wrapper">
            <div class="row row-cols-1 text-white row-cols-md-2 ">
              <h4 class="flex-fill col-lg-3 my-md-6 my-4">Subscribe to our newsletter</h4>
              <form action="#" class="row flex-fill">
                <div class="col-lg-8 my-md-4 my-2">
                  <input type="email" class="text-box form-control px-4 border-0 text-left text-md-left" id="email" placeholder="Your Email" name="email">
                </div>
                <div class="col-lg-4 my-md-6 my-4">
                  <button type="submit" class="btn btn-primary btn-lg  border-0">Subscribe Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CTA Area End -->

  <!-- footer section Start -->
   <footer class=" bg-dark footer-area pt-50 pb-50">
    <div class="container text-white">
       <div class="row">
          <div class="col-lg-3 col-md-5">
             <div class="single-footer footer-logo">
                <h3 class=" brand text-uppercase fw-bold mb-4"> <span>Adi</span>tya</h3>
                <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
             </div>
          </div>
          <div class="col-lg-2 col-md-5">
             <div class="single-footer">
                <h4>quick links</h4>
                <ul class="navbar-nav">
                   <li><a class="text-decoration-none text-white" href="#">Home</a></li>
                   <li><a class="text-decoration-none text-white" href="#">About Us</a></li>
                   <li><a class="text-decoration-none text-white" href="#">Our Services</a></li>
                   <li><a class="text-decoration-none text-white" href="contact-us.html">Contact Us</a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-5">
             <div class="single-footer contact-box">
                <h4>Contact Us</h4>
                <ul class="navbar-nav">
                   <li><i class="fa fa-map-marker"></i> 3604 Carriage Court, California, USA</li>
                   <li><i class="fa fa-mobile"></i>  +01 0034 5567 341</li>
                   <li><i class="fa fa-phone"></i>  +01 0034 5567 341</li>
                   <li><i class="fa fa-envelope"></i>  info@example.com</li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="single-footer">
              <h4>Social Links</h4>
              <section class="mb-4">
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button">
                  <i class="fab fa-facebook-f"></i>
                  </a>
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button">
                  <i class="fab fa-google"></i>
                </a>
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"role="button">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="btn btn-primary btn-floating m-1"style="background-color: #333333;" href="#!"role="button">
                  <i class="fab fa-github"></i>
                  <a class="btn btn-primary btn-floating m-1"style="background-color: #ed302f;" href="#!"role="button">
                    <i class="fab fa-youtube"></i>
                </a>
              </section>

            </div>
          </div>
       </div>
    </div>
        <!-- Copyright -->
        <div class=" copyright container-fluid text-white">
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a href="#">Aditya</a>
          </div>
        </div>

        <!-- Copyright -->
      </footer>
  <!-- footer section ends -->

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

  </body>
  </html>
