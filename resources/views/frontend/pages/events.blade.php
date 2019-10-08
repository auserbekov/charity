@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
         <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">@lang('content.home')</a></span> <span>@lang('content.events')</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.events')</h1>
      </div>
    </div>
  </div>
</div>

    
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">@lang('content.our_latest_events')</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">@lang('content.oct') 4, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">@lang('content.world_animal_day')</a></h3>
            <p class="time-loc">
              <!-- <span class="mr-2">
                <i class="icon-clock-o"></i> 10:30AM-03:30PM
              </span> 
              <span>
                <i class="icon-map-o"></i> Venue Main Campus
              </span> -->
            </p>
            <p>@lang('content.world_animal_day_text')</p>
            <p><!-- <a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a> --></p>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/event-2.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/event-3.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="/donate">World Wide Donation</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
    
@endsection