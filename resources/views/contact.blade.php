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
{{-- <section class="breadcumb-area">
    <div class="container text-center pt-4">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h2>Contact Us</h2>
                    <ul class="d-flex list-unstyled" >
                        <li>Home</li> /
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- breadcumb area end -->
<!-- contact section -->
 {{-- <section class="contact-form-area" id="contact">
  <div class="container">
    <div class="row contact-1st-section">
      <div class="col-md-6 pt-4 mt-4">
        <div class="content-area">
          <h3 class="contact-title">We are the digital agency</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae nesciunt impedit molestiae distinctio ipsa consequatur ut asperiores qui nostrum ipsam!</p>
        </div>
        <div class="contact-address contact-box">
          <ul class="navbar-nav fw-bolder">
            <li><i class="fa fa-map-marker mb-2 p-1"></i> San Francisco, CA 94126, USA</li>
            <li><i class="fa fa-mobile mb-2 p-1"></i>  +01 0034 5567 341</li>
            <li><i class="fa fa-envelope mb-2 p-1"></i>  info@example.com</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="contact-form">
          <h4 class="h1-responsive font-weight-bold text-center my-4">Why choose Us</h4>
          <div class="row">
            <div class="col-md-12 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form"  method="POST">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <label for="name" class="">Your name</label>
                      <input type="text" id="name" name="name" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <label for="email" class="">Your email</label>
                    <input type="text" id="email" name="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <label for="subject" class="">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="md-form">
                    <label for="message">Your message</label>
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="text-left pt-3">
            <a class="btn btn-primary">Send</a>
          </div>
        </div>
      </div>
    </div>
      <!--Google map-->
    <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12610.525102141122!2d-122.40597587261995!3d37.798680131351446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085806800ecb699%3A0xf91d657fb37e68fd!2sSan%20Francisco%2C%20CA%2094126%2C%20USA!5e0!3m2!1sen!2sbd!4v1655655108909!5m2!1sen!2sbd" width="100%" height="450" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
     <!--Google map area ends-->
  </div>
 </section> --}}

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
                    <li><a class="text-decoration-none text-white" href="index.html">Home</a></li>
                    <li><a class="text-decoration-none text-white" href="about-us.html">About Us</a></li>
                    <li><a class="text-decoration-none text-white" href="#">Our Services</a></li>
                    <li><a class="text-decoration-none text-white" href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-5">
                <div class="single-footer contact-box">
                    <h4>Contact Us</h4>
                    <ul class="navbar-nav">
                    <li><i class="fa fa-map-marker"></i> San Francisco, CA 94126, USA</li>
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

    {{-- <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/popper.min.js"></script>--}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>

  </body>
  </html>
