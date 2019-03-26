
@extends('layouts.front')


@section('content')
       
   


    
                
   
      <section class="bg-gradient overflow-hidden">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-6 position-relative">
              <h1 class="display-4">We build better software, faster</h1>
              <p class="lead">{{ config('app.name') }} delivers high-impact business outcomes at startup speed.</p>
              <a href="https://themes.getbootstrap.com/product/wingman-landing-page-app-template" class="btn btn-lg btn-success">Contact us</a>
              <br>to accelerate your digital transformation
            </div>
            <!--end of col-->
            <div class="col-12 col-md-6">
              <div class="main-carousel overflow-visible" data-flickity='{ "cellAlign": "center", "contain": true, "prevNextButtons": false, "pageDots":true, "wrapAround":true, "autoPlay":5000, "imagesLoaded":true, "initialIndex":3, "draggable":false }'>

                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="https://ar.bancaclub.com">
                      <img class="card-img-top" src="{{ asset('img/site-bancaclub.png') }}" alt="Banca Club">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="https://ar.bancaclub.com" class="h6 m-0">Banca Club</a>
                      <a target="_blank" href="https://ar.bancaclub.com" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="fe fe-browser"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="https://www.atlanticpark.com.ar">
                      <img class="card-img-top" src="{{ asset('img/site-atlanticpark.png') }}" alt="Atlantic Park">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="https://www.atlanticpark.com.ar" class="h6 m-0">Atlantic Park</a>
                      <a target="_blank" href="https://www.atlanticpark.com.ar" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="https://www.subanca.com">
                      <img class="card-img-top" src="{{ asset('img/site-subanca.png') }}" alt="Su Banca">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="https://www.subanca.com" class="h6 m-0">Su Banca</a>
                      <a target="_blank" href="https://www.subanca.com" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="https://www.xcoop.me">
                      <img class="card-img-top" src="{{ asset('img/site-xcoop.png') }}" alt="XCOOP">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="https://www.xcoop.me" class="h6 m-0">XCOOP</a>
                      <a target="_blank" href="https://www.xcoop.me" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="https://www.bancaprop.com">
                      <img class="card-img-top" src="{{ asset('img/site-bancaprop.png') }}" alt="Banca Prop">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="https://www.bancaprop.com" class="h6 m-0">Banca Prop</a>
                      <a target="_blank" href="https://www.bancaprop.com" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="https://www.aleriva.com">
                      <img class="card-img-top" src="{{ asset('img/site-aleriva.png') }}" alt="Aleriva">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="https://www.aleriva.com" class="h6 m-0">Aleriva</a>
                      <a target="_blank" href="https://www.aleriva.com" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <section>
        <div class="container">
          <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
              <span class="title-decorative">Why {{ config('app.name') }}?</span>
              <h2 class="display-4">Applications that matter
at startup speed</h2>
              <span class="lead">{{ config('app.name') }} creates value for enterprise companies by delivering
high-quality custom software on demand</span>

            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          <ul class="row feature-list feature-list-sm">
            <li class="col-12 col-md-4">
            
                <img alt="Image" src="{{ asset('img/front-expert.svg') }}" class="img-fluid rounded" />
              
              <h5>Expert</h5>
              <p>
              Get access to domain experts in new technologies.
              </p>
              
            </li>
            <!--end of col-->
            <li class="col-12 col-md-4">
              
                <img alt="Image" src="{{ asset('img/front-managed.svg') }}" class="img-fluid rounded" />
              
              <h5>Managed</h5>
              <p>
              Work with a fully-managed development service
              </p>
              
            </li>
            <!--end of col-->
            <li class="col-12 col-md-4">
              
                <img alt="Image" src="{{ asset('img/front-fast.svg') }}" class="img-fluid rounded" />
              
              <h5>Fast</h5>
              <p>
              Quickly spin up a new development team
              </p>
              
            </li>
            <!--end of col-->
          </ul>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <section class="bg-white">
        <div class="container">
          <div class="row justify-content-around align-items-center">
            <div class="col-12 col-md-6 col-lg-5 text-center text-md-left section-intro">
              <span class="title-decorative">{{ config('app.name') }} TALENT NETWORK</span>
              <h3 class="h1">Work with
top local talent</h3>
              <span class="lead">
              Our virtual teams feature product managers, designers, and developers with deep industry experience.
              </span>
              <a href="#">Explore Documentation &rsaquo;</a>
            </div>
            <!--end of col-->
            <div class="col-8 col-md-6 col-lg-4">
              <img alt="Image" src="assets/img/graphic-developer-group.svg" class="img-fluid shadow" />
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <section class="bg-white flush-with-above pb-0">
        <div class="container">
          <div class="row justify-content-around align-items-center">
            <div class="col-12 col-md-5 order-md-2 mb-5 mb-md-0">
              <span class="title-decorative">DIGITAL TRANSFORMATION EXPERTISE</span>
              <h5 class="h1">Transform your business with
new technologies</h5>
              <p class="lead">
              {{ config('app.name') }} delivers software teams on demand to solve enterprise digital challenges.
              </p>
              <a href="pages-app.html">Explore App Pages &rsaquo;</a>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-5 order-md-1">
              <a href="pages-app.html">
                <img alt="Image" src="assets/img/graphic-intro-ipad.png" class="img-fluid shadow" />
              </a>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <section class="bg-gradient text-white space-lg">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
              <div class="media">
                <img alt="Image" src="{{ asset('img/avatar-1.jpg') }}" class="avatar avatar-lg" />
                <div class="media-body">
                  <p class="h2">
                    “With {{ config('app.name') }}, we were able to turn out a stunning landing page and compelling MVP for our SaaS App in no time.”
                  </p>
                  <span>Samuel Canning, Movend</span>
                </div>
              </div>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <section>
        <div class="container">
          <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
              <span class="title-decorative">Flexible &amp; Extensible</span>
              <h2 class="display-4">Reliable, efficient delivery
powered by technology</h2>
              <span class="lead">The {{ config('app.name') }} Solution Delivery platform uses millions of project datapoints to ensure that your project is successful</span>

            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          <div class="row justify-content-around align-items-center">
            <div class="col-12 col-md-6 col-lg-5 order-md-2">
              <ul class="nav" id="myTab" role="tablist">
                <li>
                  <a class="active card" id="tab-1" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <div class="card-body">
                      <h5>Project Health</h5>
                      <p>
                      Dashboards monitor activity to identify project roadblocks.
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="card" id="tab-2" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    <div class="card-body">
                      <h5>Karma</h5>
                      <p>
                      Powerful peer rating ensures team quality across the {{ config('app.name') }} Talent Network.
                      </p>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="card" id="tab-3" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                    <div class="card-body">
                      <h5>Project Planner</h5>
                      <p>
                      Ideal plans by application type leverage past project experience.
                      </p>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-6 order-md-1">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="tab-1">
                  <img alt="Image" class="img-fluid shadow" src="{{ asset('img/front-hero.png') }}" />
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="tab-2">
                  <img alt="Image" class="img-fluid shadow" src="{{ asset('img/front-hero.png') }}" />
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="tab-3">
                  <img alt="Image" class="img-fluid shadow" src="{{ asset('img/front-hero.png') }}" />
                </div>
              </div>
            </div>
            <!--end of col-->
          </div>
          <!--end of row
          <div class="row justify-content-center text-center section-outro">
            <div class="col-lg-4 col-md-5">
              <h6>Detailed Overview</h6>
              <p>Wingman's component index showcases the full breadth of features at a glance</p>
              <a href="components-bootstrap.html">Start exploring &rsaquo;</a>
            </div>
            
          </div>-->
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
    
@endsection