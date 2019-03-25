
@extends('layouts.front')


@section('content')
       

           


    
                
    <div class="main-container">
      <section class="space-lg bg-gradient overflow-hidden">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-5 mb-md-0 position-relative">
              <h1 class="display-4">We build better software, faster</h1>
              <p class="lead">
              {{ config('app.name', 'Laravel') }} delivers high-impact business outcomes at startup speed.
              </p>
              <a href="https://themes.getbootstrap.com/product/wingman-landing-page-app-template" class="btn btn-lg btn-success">Contact us</a>
              <i class="icon-chevron-right"></i>to accelerate your digital transformation
            </div>
            <!--end of col-->
            <div class="col-12 col-md-6">
              <div class="main-carousel overflow-visible" data-flickity='{ "cellAlign": "center", "contain": true, "prevNextButtons": false, "pageDots":true, "wrapAround":true, "autoPlay":5000, "imagesLoaded":true, "initialIndex":3, "draggable":false }'>

                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="landing-1.html">
                      <img class="card-img-top" src="{{ asset('img/site-bancaclub.png') }}" alt="Landing - One">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="landing-1.html" class="h6 m-0">BancaClub</a>
                      <a target="_blank" href="landing-1.html" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="landing-2.html">
                      <img class="card-img-top" src="{{ asset('img/site-atlanticpark.png') }}" alt="Landing - Two">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="landing-2.html" class="h6 m-0">AtlanticPark</a>
                      <a target="_blank" href="landing-2.html" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="landing-8.html">
                      <img class="card-img-top" src="{{ asset('img/site-subanca.png') }}" alt="Landing - Eight">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="landing-8.html" class="h6 m-0">SuBanca</a>
                      <a target="_blank" href="landing-8.html" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="landing-9.html">
                      <img class="card-img-top" src="{{ asset('img/site-xcoop.png') }}" alt="Landing - Nine">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="landing-9.html" class="h6 m-0">XCOOP</a>
                      <a target="_blank" href="landing-9.html" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="app-collection-list.html">
                      <img class="card-img-top" src="{{ asset('img/site-bancaprop.png') }}" alt="Collection - List">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="app-collection-list.html" class="h6 m-0">BancaProp</a>
                      <a target="_blank" href="app-collection-list.html" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
                    </div>
                  </div>
                </div>
                <div class="carousel-cell col-11">
                  <div class="card card-sm bg-gradient border-0">
                    <a href="app-docs-landing.html">
                      <img class="card-img-top" src="{{ asset('img/site-aleriva.png') }}" alt="Documentation - Landing">
                    </a>
                    <div class="card-footer d-flex justify-content-between bg-white">
                      <a href="app-docs-landing.html" class="h6 m-0">Aleriva</a>
                      <a target="_blank" href="app-docs-landing.html" data-toggle="tooltip" data-placement="top" title="Open in new tab"><i class="icon-popup"></i></a>
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
              <span class="title-decorative">Why {{ config('app.name', 'Laravel') }}?</span>
              <h2 class="display-4">Applications that matter
at startup speed</h2>
              <span class="lead">{{ config('app.name', 'Laravel') }} creates value for enterprise companies by delivering
high-quality custom software on demand</span>

            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          <ul class="row feature-list feature-list-sm">
            <li class="col-12 col-md-4">
              <a href="pages-landing.html" class="card">
                <img alt="Image" src="assets/img/overview/landing-9-hero.jpg" class="img-fluid rounded" />
              </a>
              <h5>Expert</h5>
              <p>
              Get access to domain experts in new technologies.
              </p>
              <a href="pages-landing.html">Explore Landing Pages &rsaquo;</a>
            </li>
            <!--end of col-->
            <li class="col-12 col-md-4">
              <a href="pages-app.html" class="card">
                <img alt="Image" src="assets/img/overview/app-profile-social-hero.jpg" class="img-fluid rounded" />
              </a>
              <h5>Managed</h5>
              <p>
              Work with a fully-managed development service
              </p>
              <a href="pages-app.html">Explore App Pages &rsaquo;</a>
            </li>
            <!--end of col-->
            <li class="col-12 col-md-4">
              <a href="pages-inner.html" class="card">
                <img alt="Image" src="assets/img/overview/company-simple-hero.jpg" class="img-fluid rounded" />
              </a>
              <h5>Fast</h5>
              <p>
              Quickly spin up a new development team
              </p>
              <a href="pages-inner.html">Explore Inner Pages &rsaquo;</a>
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
              <span class="title-decorative">{{ config('app.name', 'Laravel') }} TALENT NETWORK</span>
              <h3 class="h1">Work with
top global talent</h3>
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
              {{ config('app.name', 'Laravel') }} delivers software teams on demand to solve enterprise digital challenges.
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
                <img alt="Image" src="assets/img/avatar-male-3.jpg" class="avatar avatar-lg" />
                <div class="media-body">
                  <p class="h2">
                    “With Wingman, we were able to turn out a stunning landing page and compelling MVP for our SaaS App in no time.”
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
              <span class="lead">The {{ config('app.name', 'Laravel') }} Solution Delivery platform uses millions of project datapoints to ensure that your project is successful</span>

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
                      Powerful peer rating ensures team quality across the {{ config('app.name', 'Laravel') }} Talent Network.
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
                  <img alt="Image" class="img-fluid shadow" src="assets/img/graphic-intro-widgets.png" />
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="tab-2">
                  <img alt="Image" class="img-fluid shadow" src="assets/img/graphic-intro-code.png" />
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="tab-3">
                  <img alt="Image" class="img-fluid shadow" src="assets/img/graphic-intro-plugins.png" />
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
      <section class="bg-gradient p-0 text-white">
        <svg class="decorative-divider" preserveAspectRatio="none" viewbox=" 0 0 100 100">
          <polygon fill="#F8F9FB" points="0 0 100 0 100 100"></polygon>
        </svg>
        <div class="container space-lg">
          <div class="row text-center">
            <div class="col">
              <h3 class="h1">Ready to get started?</h3>
              <a href="https://themes.getbootstrap.com/product/wingman-landing-page-app-template" class="btn btn-lg btn-light">Contact us</a>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <footer class="bg-gray text-light footer-long">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-3">
              <img alt="Image" src="assets/img/logo-white.svg" class="mb-4" />
              <p class="text-muted">
                &copy; 2019 Medium Rare
                <br />Template available exclusively
                <br />at Bootstrap Themes
              </p>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-9">
              <span class="h5">A robust suite of styled components for Bootstrap 4</span>
              <div class="row no-gutters">
                <div class="col-6 col-lg-3">
                  <h6>Navigate</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="index.html">Overview</a>
                    </li>
                    <li>
                      <a href="pages-landing.html">Landing Pages</a>
                    </li>
                    <li>
                      <a href="pages-app.html">App Pages</a>
                    </li>
                    <li>
                      <a href="pages-inner.html">Inner Pages</a>
                    </li>
                  </ul>
                </div>
                <!--end of col-->
                <div class="col-6 col-lg-3">
                  <h6>Platform</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Mac OS &amp; iOS</a>
                    </li>
                    <li>
                      <a href="#">Android &amp; Chrome OS</a>
                    </li>
                    <li>
                      <a href="#">Windows</a>
                    </li>
                    <li>
                      <a href="#">Linux</a>
                    </li>
                  </ul>
                </div>
                <!--end of col-->
                <div class="col-6 col-lg-3">
                  <h6>Community</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Forum</a>
                    </li>
                    <li>
                      <a href="#">Knowledgebase</a>
                    </li>
                    <li>
                      <a href="#">Hire an expert</a>
                    </li>
                    <li>
                      <a href="#">FAQ</a>
                    </li>
                    <li>
                      <a href="#">Contact</a>
                    </li>
                  </ul>
                </div>
                <!--end of col-->
                <div class="col-6 col-lg-3">
                  <h6>Company</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">About company</a>
                    </li>
                    <li>
                      <a href="#">History</a>
                    </li>
                    <li>
                      <a href="#">Team</a>
                    </li>
                    <li>
                      <a href="#">Investment</a>
                    </li>
                  </ul>
                </div>
                <!--end of col-->
              </div>
              <!--end of row-->
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </footer>
    </div>
    </body>
</html>
@endsection