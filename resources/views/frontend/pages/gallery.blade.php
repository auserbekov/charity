@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Gallery</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Galleries</h1>
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

    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
        </div>
        <div class="col-md-6 volunteer pl-md-5 ftco-animate">
          <h3 class="mb-3">Be a volunteer</h3>
          <form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
        </div>          
        </div>
      </div>
    </section>
    
@endsection