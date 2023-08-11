@extends('frontend.layouts.app')
@section('title', 'Marketing Solution')
@section('page')
    <div data-image-src="{{ asset('user-assets/img/banner/marketing-hero-banner.jpg') }}" data-overlay="4"
        class=" header-hero-2 ">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="text-center col-lg-12">
                    <div class=" contenet-hero">
                        <h1>Marketing Solution</h1>
                        <h6 style="font-weight: 200; margin-top:20px;">Join us on a transformative journey with our marketing solutions. We craft a roadmap to elevate your brand's influence through tailored strategies and cutting-edge digital techniques.
                        </h6>
                        {{-- <p>Building strong connections between brands and their target customers through data-driven digital marketing approaches.</p> --}}
                        {{-- <a href="#" class="view-case scroll-down scroll-to">Scroll Down <img src="assets/img/arrow-right-wight.png" alt=""></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="intro-about section-margin">

        <!--  Thanks to frontendmentor.io for the challenge.  -->




        <div class="row12">


            <div class="nft">
              <div class='main'>
                <img class='tokenImage' src="https://img.freepik.com/free-photo/audit-compliance-evaluation-financial-statement-concept_53876-167135.jpg?size=626&ext=jpg&ga=GA1.2.1932659750.1691659386&semt=ais" alt="NFT" />
                <h4 style="margin:20px;">Business Audit</h4>
                <p class='description'>By utilizing our audit services, you can uncover insights and ensure compliance.
              </p>
                <div class='tokenInfo'>

                </div>
                <hr />

              </div>
            </div>
            <div class="nft">
              <div class='main'>
                <img class='tokenImage' src="https://img.freepik.com/free-photo/businesspeople-working-finance-accounting-analyze-financi_74952-1411.jpg?size=626&ext=jpg&ga=GA1.2.1932659750.1691659386&semt=ais" alt="NFT" />
                <h4 style="margin:20px;">Business Statistics</h4>
                <p class='description'>Analyzing precise business statistics to empower informed decisions.

              </p>
                <div class='tokenInfo'>

                </div>
                <hr />

              </div>
            </div>
            <div class="nft">
              <div class='main'>
                <img class='tokenImage' src="https://img.freepik.com/free-photo/automation-production-system-operation-precess-concept_53876-138637.jpg?size=626&ext=jpg&ga=GA1.2.1932659750.1691659386&semt=ais" alt="NFT" />
                <h4 style="margin:20px;">Automation and Marketing</h4>
                <p class='description'>The seamless integration of marketing and automation for unprecedented business growth.
              </p>
                <div class='tokenInfo'>

                </div>
                <hr />

              </div>
            </div>
          </div>







    @endsection
