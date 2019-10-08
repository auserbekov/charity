<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title', __('content.title'))</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">@lang('content.bibars')</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> @lang('content.menu')
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">@lang('content.home')</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">@lang('content.about')</a></li>
          <li class="nav-item"><a href="/causes" class="nav-link">@lang('content.causes')</a></li>
          <li class="nav-item"><a href="/donate" class="nav-link">@lang('content.donate')</a></li>
          <li class="nav-item"><a href="/blog" class="nav-link">@lang('content.blog')</a></li>
          <li class="nav-item"><a href="/gallery" class="nav-link">@lang('content.gallery')</a></li>
          <li class="nav-item"><a href="/events" class="nav-link">@lang('content.events')</a></li>
          <li class="nav-item"><a href="/contacts" class="nav-link">@lang('content.contacts')</a></li>


          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarLangs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @lang('content.lang_switcher')
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarLangs">
              <a class="dropdown-item" href="/lang/ru">Русский</a>
              <a class="dropdown-item" href="/lang/en">English</a>
              <!-- <div class="dropdown-divider"></div> -->
            </div>


          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    @yield('content')

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">@lang('content.about')</h2>
              <p>@lang('content.about_us_text')</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">@lang('content.recent_blog')</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/news-1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">@lang('content.most_humane_country')</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> @lang('content.sep') 20, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/dog-2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">@lang('content.dogs_know_your_face')</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> @lang('content.sep') 18, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">@lang('content.site_links')</h2>
              <ul class="list-unstyled">
                <li><a href="/" class="py-2 d-block">@lang('content.home')</a></li>
                <li><a href="/about" class="py-2 d-block">@lang('content.about')</a></li>
                <li><a href="/privacy" class="py-2 d-block">@lang('content.privacy')</a></li>
                <li><a href="/donation-offer" class="py-2 d-block">@lang('content.refund')</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">@lang('content.have_a_question')</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">@lang('content.address_text')</span></li>
	                <!-- <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li> -->
	                <li><a href="mailto:info@bibars.kz"><span class="icon icon-envelope"></span><span class="text">info@bibars.kz</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
              @lang('content.bibars'). Copyright &copy;<script>document.write(new Date().getFullYear());</script> @lang('content.rights_reserved')
              @lang('content.designed_by')  
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/google-map.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
    
  @yield('scripts_import')  
  <script type="text/javascript">
    @yield('scripts_body')
  </script>

  </body>
</html>