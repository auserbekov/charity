@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">@lang('content.home')</a></span> <span>@lang('content.gallery')</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.gallery')</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-gallery">
      <div class="container">
        <div class="d-md-flex">
          <a href="images/dog-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/dog-2.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search"></span>
            </div>
          </a>
          <a href="images/dog-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/dog-3.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search"></span>
            </div>
          </a>
          <a href="images/event-1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/event-1.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search"></span>
            </div>
          </a>
          <a href="images/causes-horses.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/causes-horses.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search"></span>
            </div>
          </a>
        </div>
        <div class="d-md-flex">
          <a href="images/causes-elephants.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/causes-elephants.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search"></span>
            </div>
          </a>
          <a href="images/causes-healing.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/causes-healing.jpg);">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="icon-search"></span>
            </div>
          </a>
          
        </div>
        <div class="d-md-flex">
          
        </div>
      </div>
    </section>

    
@endsection