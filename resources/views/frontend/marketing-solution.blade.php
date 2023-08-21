@extends('frontend.layouts.app')
@section('title', 'Marketing Solution')
@section('page')

 {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'> --}}
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'><link rel="stylesheet" href="./style.css">



    <section style="margin-top: 60px" class="intro-about">
        <div style="background-position: center;
    background-size: cover;"
            data-image-src="{{ asset('user-assets/img/banner/marketing-hero-banner.jpg') }}" data-overlay="8"
            class="header-hero header-hero-2 ">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="text-center col-lg-12">
                        <div class=" contenet-hero">
                            <h1 style="max-width: 1023px;">Marketing Solution</h1>
                            <h6 style="font-weight: 200; margin-top:20px;">Join us on a transformative journey with our
                                marketing solutions. We craft a roadmap to elevate your brand's influence through tailored
                                strategies and cutting-edge digital techniques.
                            </h6>
                            {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                            {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>





{{--

    <section class="container game-section">
        <div class="owl-carousel custom-carousel owl-theme">
          <div class="item active" style="background-image: url('user-assets/img/services/marketing-strategy.jpg') ;">

            <div class="item-desc">
              <h3>Marketing and Strategy</h3>
              <p>Achieving success through innovative marketing and strategic thinking.
            </p>
            </div>
          </div>
          <div class="item" style="background-image: url(user-assets/img/services/seo.jpg);">
            <div class="item-desc">
              <h3>SEO</h3>
              <p>Enhancing your online presence with expert SEO services.
            </p>
            </div>
          </div>
          <div class="item" style="background-image: url(user-assets/img/services/smm.jpg);">
            <div class="item-desc">
              <h3>SMM</h3>
              <p>Enhance your brand's reach through dynamic social media management.
            </p>
            </div>
          </div>
          <div class="item" style="background-image: url(user-assets/img/services/marketing-campaign.jpg);">
            <div class="item-desc">
              <h3>Marketing Campaign</h3>
              <p>Creating marketing campaigns that are results-driven and impactful.
            </p>
            </div>
          </div>


        </div>
        </div>
      </section> --}}




      {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script><script  src="./script.js"></script> --}}
      {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script> --}}


      <section class="container game-section">

        <div class="ms-row mb-50">
            <div class="card-ms">
                <div class="content">
        <img src="{{asset('user-assets/img/services/smm.jpg')}}" alt="">
                    <h3>SMM</h3>
                <p class="para">
                    Enhance your brand's reach through dynamic social media management.
                  </p>

                </div>
              </div>
      <div class="card-ms">
        <div class="content">
            <img src="{{asset('user-assets/img/services/seo.jpg')}}" alt="">
            <h3>SEO</h3>
        <p class="para">
            Enhancing your online presence with expert SEO services.
          </p>

        </div>
      </div>

      </div>
      <div class="ms-row">

          <div class="card-ms">
            <div class="content">
    <img src="{{asset('user-assets/img/services/marketing-strategy.jpg')}}" alt="">
                <h3>Marketing and Strategy</h3>
         <p class="para">
                Achieving success through innovative marketing and strategic thinking.
              </p>

            </div>
          </div>
      <div class="card-ms">
        <div class="content">
            <img src="{{asset('user-assets/img/services/marketing-campaign.jpg')}}" class="ms-img">
            <h3>Marketing Campaign</h3>
       <p class="para">
            Creating marketing campaigns that are results-driven and impactful.
          </p>

        </div>
      </div>

    </div>
</section>

@endsection
