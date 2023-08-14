@extends('frontend.layouts.app')
@section('title', 'It Solution')
@section('page')
 {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'> --}}
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'><link rel="stylesheet" href="./style.css">
<section class="intro-about section-margin">
    <div style="background-position: center;
    background-size: cover;" data-image-src="{{ asset('user-assets/img/banner/it-solutions-hero-banner.jpg') }}" data-overlay="6"
        class="header-hero header-hero-2 ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="text-center col-lg-12">
                    <div class=" contenet-hero">
                        <h1>IT Solution</h1>
                        <h6 style="font-weight: 200; margin-top:20px;">With our IT solutions, you can experience seamless technological advancement. Our team navigates your business towards digital excellence from scalable infrastructure to intricate software solutions.
                        </h6>
                        {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                        {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>






<section class="game-section">

    <div class="owl-carousel custom-carousel owl-theme">
      <div class="item active" style="background-image: url(https://img.freepik.com/free-photo/rear-view-programmer-working-all-night-long_1098-18697.jpg?w=1380&t=st=1691845099~exp=1691845699~hmac=8f6ad3a6c923d17723040b39a5124d39f94bd790dbc63987c5c955549f1e2125);">
        <div class="item-desc">
          <h3>service slider</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi asperiores maiores distinctio illo, necessitatibus commodi odit modi a magnam! Id?</p>
        </div>
      </div>
      <div class="item" style="background-image: url(https://img.freepik.com/free-photo/html-css-collage-concept-with-person_23-2150062008.jpg?size=626&ext=jpg&ga=GA1.2.993756276.1691513559&semt=ais);">
        <div class="item-desc">
          <h3>service slider</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi asperiores maiores distinctio illo, necessitatibus commodi odit modi a magnam! Id?</p>
        </div>
      </div>
      <div class="item" style="background-image: url(https://img.freepik.com/free-photo/programming-background-with-person-working-with-codes-computer_23-2150010125.jpg?size=626&ext=jpg&ga=GA1.2.993756276.1691513559&semt=ais);">
        <div class="item-desc">
          <h3>service slider</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi asperiores maiores distinctio illo, necessitatibus commodi odit modi a magnam! Id?</p>
        </div>
      </div>
      <div class="item" style="background-image: url(https://img.freepik.com/free-photo/workers-it-company-working-computer_1303-19448.jpg?size=626&ext=jpg&ga=GA1.2.993756276.1691513559&semt=ais);">
        <div class="item-desc">
          <h3>service slider</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi asperiores maiores distinctio illo, necessitatibus commodi odit modi a magnam! Id?</p>
        </div>
      </div>

    </div>
    </div>
  </section>




  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script><script  src="./script.js"></script>
  {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script> --}}
  





    @endsection
