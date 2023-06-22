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

<!-- slider area Start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="slider-single carousel-item">
          <img src="assets/sliders/slider-1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="animated fadeInDown" style="animation-delay: 1s;">Creative Digital Agency</h5>
            <p class="d-none d-md-block animated fadeInUp" style="animation-delay: 2s;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos quisquam necessitatibus non, incidunt facere possimus.</p>
            <p class="animated fadeInUp" style="animation-delay: 3s;">
              <a href="#">Learn More</a>
            </p>
          </div>
        </div>
        <div class="slider-single carousel-item">
          <img src="assets/sliders/slider-3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption ">
            <h5 class="animated fadeInDown" style="animation-delay: 1s;">Creative Digital Agency</h5>
            <p class="d-none d-md-block animated fadeInUp" style="animation-delay: 2s;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos quisquam necessitatibus non, incidunt facere possimus.</p>
            <p class="animated fadeInUp" style="animation-delay: 3s;">
              <a href="#">Learn More</a>
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
<!-- slider area end -->

<!-- About Area Start -->
<section class="about-area" id="about">
  <div class="container">
     <div class="row section-title">
        <div class="col-md-12 text-center">
           <h2>who <span>we are</span>?</h2>
        </div>
        <div class="col-md-12 text-center">
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. </p>
        </div>
     </div>
     <div class="row">
        <div class="col-md-7">
           <div class="about">
              <div class="page-title">
                 <h4>welcome to Creative Agency</h4>
              </div>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum delectus aliquam ipsum itaque voluptatem non reiciendis aliquid totam facere, tempora iure iusto adipisci doloremque in, amet, alias nostrum. Explicabo reprehenderit.</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
              <a href="about-us.html" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
           </div>
        </div>
        <div class="col-md-5">
           <div class="single_about">
              <i class="fa fa-laptop"></i>
              <h4>our mission</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
           </div>
           <div class="single_about">
              <i class="fa fa-user"></i>
              <h4>our vission</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
           </div>
           <div class="single_about">
              <i class="fa fa-pencil"></i>
              <h4>our history</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
           </div>
        </div>
     </div>
  </div>
</section>
<!-- About Area End -->

<!-- Services Area Start -->
<!-- <section class="services-area pt-100 pb-50" id="services"> -->
  <section class="section-padding" id="services">
    <div class="container">
     <div class="row section-title">
        <div class="col-lg-12">
            <div class="section-header text-center">
              <h2>Our Services</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
            </div>
      </div>


      </div>
      <div class="row">
          <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
              <i class="fa fa-laptop"></i>
              <div class="content">
                <h4>Web Design </h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <i class="fa fa-gears"></i>
                <div class="content">
                  <h4>Web Development</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <i class="fa fa-mobile"></i>
                <div class="content">
                  <h4>Responsive Design</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <i class="fa fa-magic"></i>
                <div class="content">
                  <h4>Graphic Design</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <i class="fa fa-pencil"></i>
                <div class="content">
                  <h4>Creative Design</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
              <i class="fa-solid fa-magnifying-glass fa"></i>
              <div class="content">
                <h4>Search Engine Optimaization</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
<!-- Services Area End -->

<!-- portfolio section start-->
<section id="portfolio">
  <div class="container mt-3">
      <h1 class="text-center">Portfolio</h1>
      <div class="row">
          <div class="col-lg-4 mt-4">
              <div class="card">
                <div class="portfolio">
                  <img class="card-img-top" src="assets/image/portfolios/portfolio-1.jpg" alt="Card image" style="width:100%">
                  <div class="portfolio-overlay">
                    <a href="#" class="icon">
                      <i class="fas fa-search"></i>
                    </a>
                  </div>
                </div>
                  <div class="card-body">
                      <h4 class="card-title">HTML & CSS Templates</h4>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mt-4">
              <div class="card portfolioContent">
                <div class="portfolio">
                  <img class="card-img-top" src="assets/image/portfolios/portfolio-2.jpg" alt="Card image" style="width:100%">
                  <div class="portfolio-overlay">
                    <a href="#" class="icon">
                      <i class="fas fa-search"></i>
                    </a>
                  </div>
                </div>
                  <div class="card-body">
                      <h4 class="card-title">Bootstrap Templates</h4>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mt-4">
              <div class="card portfolioContent">
                <div class="portfolio">
                  <img class="card-img-top" src="assets/image/portfolios/portfolio-3.jpg" alt="Card image" style="width:100%">
                  <div class="portfolio-overlay">
                    <a href="#" class="icon">
                      <i class="fas fa-search"></i>
                    </a>
                  </div>
                </div>
                  <div class="card-body">
                      <h4 class="card-title">Product Landing Page</h4>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-lg-4 mt-4">
              <div class="card portfolioContent">
                <div class="portfolio">
                  <img class="card-img-top" src="assets/image/portfolios/portfolio-4.jpg" alt="Card image" style="width:100%">
                  <div class="portfolio-overlay">
                    <a href="#" class="icon">
                      <i class="fas fa-search"></i>
                    </a>
                  </div>
                </div>
                  <div class="card-body">
                      <h4 class="card-title">Digital Marketing Service</h4>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mt-4">
              <div class="card portfolioContent">
                <div class="portfolio">
                  <img class="card-img-top" src="assets/image/portfolios/portfolio-5.jpg" alt="Card image" style="width:100%">
                  <div class="portfolio-overlay">
                    <a href="#" class="icon">
                      <i class="fas fa-search"></i>
                    </a>
                  </div>
                </div>
                  <div class="card-body">
                      <h4 class="card-title">Website Ranking</h4>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 mt-4">
              <div class="card portfolioContent">
                <div class="portfolio">
                  <img class="card-img-top" src="assets/image/portfolios/portfolio-6.jpg" alt="Card image" style="width:100%">
                  <div class="portfolio-overlay">
                    <a href="#" class="icon">
                      <i class="fas fa-search"></i>
                    </a>
                  </div>
                </div>
                  <div class="card-body">
                      <h4 class="card-title">PSD/Figma Templates</h4>
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
              </div>
          </div>
      </div>
</section>
<!-- portfolio section Ends -->

<!-- Teams section Start -->
<section id="teams">
  <div class="container">
      <div class="row section-title">
        <div class="col-lg-12">
            <div class="section-header text-center">
              <h2>Our Teams</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
            </div>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
          <div class="card">
            <img src="assets/image/teams/team-1.jpg" class="team-image card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title fw-bold">Elden</h4>
              <h6 class="card-subtitle fw-bold">Founder & CEO</h6>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi a delectus asperiores nostrum.</p>
              <div class="social-icon">
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #3B5998;" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle " style="background-color: #C34FA0;" href="#" role="button">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #55ACEE;" href="#" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #339BD4;" href="#" role="button">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/image/teams/team-2.jpg" class="team-image card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title fw-bold">Nanette Burris</h4>
              <h6 class="card-subtitle fw-bold">Web Developer</h6>
              <p class="card-text">TLorem ipsum dolor, sit amet consectetur adipisicing elit. Animi a delectus asperiores nostrum.</p>
              <div class="social-icon">
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #3B5998;" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle " style="background-color: #C34FA0;" href="#" role="button">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #55ACEE;" href="#" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #339BD4;" href="#" role="button">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/image/teams/team-3.jpg" class="team-image card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title fw-bold">Charles Olson</h4>
              <h6 class="card-subtitle fw-bold">Graphics Designer</h6>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi a delectus asperiores nostrum.</p>
              <div class="social-icon">
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #3B5998;" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle " style="background-color: #C34FA0;" href="#" role="button">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #55ACEE;" href="#" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #339BD4;" href="#" role="button">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="assets/image/teams/team-4.jpg" class="team-image card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title fw-bold">Leanna</h4>
              <h6 class="card-subtitle fw-bold">SEO Analyst</h6>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi a delectus asperiores nostrum.</p>
              <div class="social-icon">
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #3B5998;" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle " style="background-color: #C34FA0;" href="#" role="button">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #55ACEE;" href="#" role="button">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-primary border-0 rounded-circle" style="background-color: #339BD4;" href="#" role="button">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!-- Teams section Ends -->

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

  {{-- <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/popper.min.js"></script>--}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>

</body>
</html>
