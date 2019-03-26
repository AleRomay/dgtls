<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->

    <!-- Styles -->
    
    <link href="{{ asset('css/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vs2015.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flatpickr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/light.css') }}" rel="stylesheet" id="stylesheetLight">
    <link href="{{ asset('css/front.css') }}" rel="stylesheet">
</head>
<body>
   




<!-- NAVIGATION
  ================================================== -->
<!-- Navigration: Sidbar -->
@include('navigation.topbar')



  

        
            @yield('content')
        

    <section class="bg-gradient p-0 text-white">
        <svg class="decorative-divider" preserveAspectRatio="none" viewbox=" 0 0 100 100">
          <polygon fill="#F8F9FB" points="0 0 100 0 100 100"></polygon>
        </svg>
        <div class="container space-lg">
          <div class="row text-center">
            <div class="col">
              <h3 class="h1">Ready to get started?</h3>
              <a href="mailto:sales@digitals.com.ar" class="btn btn-lg btn-light">Contact us</a>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <footer class="bg-gray text-light footer-long text-center">
        <div class="container">
          <div class="row">
          <div class="col-6 col-lg-3">
                  <h6>Company</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">About</a>
                    </li>
                    <li>
                      <a href="#">Careers</a>
                    </li>
                    <li>
                      <a href="#">Network</a>
                    </li>
                  </ul>
                  <br>
                </div>
                           <div class="col-6 col-lg-3">
                  <h6>Platform</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Talent</a>
                    </li>
                    <li>
                      <a href="#">Intelligence</a>
                    </li>
                    <li>
                      <a href="#">Diferrence</a>
                    </li>
                  </ul>
                  <br>
                </div> 
                   <div class="col-6 col-lg-3">
                  <h6>Solutions</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="index.html">Innovation</a>
                    </li>
                    <li>
                      <a href="pages-landing.html">Prototyping</a>
                    </li>
                    <li>
                      <a href="pages-app.html">Design</a>
                    </li>
                    <li>
                      <a href="pages-inner.html">Development</a>
                    </li>
                    <li>
                      <a href="pages-inner.html">Maintenance</a>
                    </li>
                    <li>
                      <a href="pages-inner.html">Artificial Inteligent</a>
                    </li>                 
                  </ul>
                  <br>
                </div>
                <!--end of col-->

                <!--end of col-->
              
                <!--end of col-->
                <div class="col-6 col-lg-3">
                  <h6>Resources</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Web Developers</a>
                    </li>
                    <li>
                      <a href="#">Mobile Developers</a>
                    </li>
                    <li>
                      <a href="#">Digital Marketers</a>
                    </li>
                    <li>
                      <a href="#">UX/UI Designers</a>
                    </li>
                    <li>
                      <a href="#">Data Sciance</a>
                    </li>                  
                  </ul>
                  <br>
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

        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
        <script src="{{ asset('js/jquery.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.js') }}" defer></script>
        <script src="{{ asset('js/chart.js') }}" defer></script>
        <script src="{{ asset('js/highlight.js') }}" defer></script>
        <script src="{{ asset('js/flatpickr.js') }}" defer></script>
        <script src="{{ asset('js/jquery.mask.js') }}" defer></script>
        <script src="{{ asset('js/list.js') }}" defer></script>
        <script src="{{ asset('js/quill.js') }}" defer></script>
        <script src="{{ asset('js/dropzone.js') }}" defer></script>
        <script src="{{ asset('js/select2.js') }}" defer></script>
        <script src="{{ asset('js/chart.extension.js') }}" defer></script>
        <script src="{{ asset('js/theme.js') }}" defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.2/flickity.pkgd.min.js"></script>
    </body>
</html>