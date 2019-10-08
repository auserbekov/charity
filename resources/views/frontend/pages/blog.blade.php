@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
         <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">@lang('content.home')</a></span> <span>@lang('content.blog')</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.blog')</h1>
      </div>
    </div>
  </div>
</div>

    
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">@lang('content.recent_from_blog')</h2>
        <p>@lang('content.recent_from_blog_text')</p>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/news-1.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">@lang('content.sep') 20, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">@lang('content.most_humane_country')</a></h3>
            <p>@lang('content.most_humane_country_text')</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/dog-2.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">@lang('content.sep') 18, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">@lang('content.dogs_know_your_face')</a></h3>
            <p>@lang('content.dogs_know_your_face_text')</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/dog-3.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">@lang('content.sep') 11, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">@lang('content.dogtectives')</a></h3>
            <p>@lang('content.dogtectives_text')</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
@endsection