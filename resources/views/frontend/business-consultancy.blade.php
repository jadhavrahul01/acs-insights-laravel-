@extends('frontend.layouts.app')
@section('title', 'Business Consultancy')
@section('page')

<section class="intro-about section-margin">
    <div style="background-position: center;
    background-size: cover;" data-image-src="{{ asset('user-assets/img/banner/consultancy-hero-banner.jpg') }}" data-overlay="8"
        class="header-hero header-hero-2 ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="text-center col-lg-12">
                    <div class=" contenet-hero">
                        <h1 style="max-width: 1023px;">Business Consultancy</h1>
                        <h6 style="font-weight: 200; margin-top:20px;">Our comprehensive consultancy services can help your
                            business reach its full potential. Analyzing, strategizing, and implementing solutions that
                            drive growth are our specialties.
                            You can rely on us for every step of the way, from refining operations to expanding.
                            Take your business landscape to the next level with insight that matters and strategies that
                            work.
                        </h6>
                        {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                        {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      <!--  Thanks to frontendmentor.io for the challenge.  -->


<div class="row12">


      <div class="nft">
        <div class='main'>
          <img class='tokenImage' src=" https://img.freepik.com/free-photo/audit-compliance-evaluation-financial-statement-concept_53876-167135.jpg?size=626&ext=jpg&ga=GA1.2.1932659750.1691659386&semt=ais" alt="NFT" />
          <h4 style="margin: 20px 0 15px 0;font-weight: 600;">Business Audit</h4>
          <p style="margin: 1px 0px;    text-align: left;" class='description'>By utilizing our audit services, you can uncover <br> insights and ensure compliance.
        </p>
          <div class='tokenInfo'>

          </div>
          <hr />

        </div>
      </div>
      <div class="nft">
        <div class='main'>
          <img class='tokenImage' src="https://img.freepik.com/free-photo/businesspeople-working-finance-accounting-analyze-financi_74952-1411.jpg?size=626&ext=jpg&ga=GA1.2.1932659750.1691659386&semt=ais" alt="NFT" />
          <h4 style="margin: 20px 0 15px 0;font-weight: 600;">Business Statistics</h4>
          <p style="margin: 1px 0px;    text-align: left;" class='description'>Analyzing precise business statistics to <br> empower informed decisions.

        </p>
          <div class='tokenInfo'>

          </div>
          <hr />

        </div>
      </div>
      <div class="nft">
        <div class='main'>
          <img class='tokenImage' src="https://img.freepik.com/free-photo/automation-production-system-operation-precess-concept_53876-138637.jpg?size=626&ext=jpg&ga=GA1.2.1932659750.1691659386&semt=ais" alt="NFT" />
          <h4 style="margin: 20px 0 15px 0;font-weight: 600;">Automation and Marketing</h4>
          <p style="margin: 1px 0px;    text-align: left;" class='description'>The seamless integration of marketing and automation for unprecedented business growth.
        </p>
          <div class='tokenInfo'>

          </div>
          <hr />

        </div>
      </div>
    </div>











@endsection
