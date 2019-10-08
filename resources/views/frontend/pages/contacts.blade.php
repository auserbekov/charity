@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">@lang('content.home')</a></span> <span>@lang('content.contacts')</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.contacts')</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">@lang('content.contacts')</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p>@lang('content.full_address')</p>
          </div>
          <div class="col-md-3">
            <!-- <p><span>Phone:</span> <a href="tel://">+ 7 ...</a></p> -->
          </div>
          <div class="col-md-3">
            <p><span>@lang('content.email'):</span> <a href="mailto:info@bibars.kz">info@bibars.kz</a></p>
          </div>
          <div class="col-md-3">
            <p><span>@lang('content.website'):</span> <a href="/">bibars.kz</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <h4 class="mb-4">@lang('content.have_a_question')</h4>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="@lang('content.your_name')">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="@lang('content.your_email')">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="@lang('content.subject')">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="@lang('content.message')"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="@lang('content.submit')" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <!-- <div class="col-md-6" id="map"></div> -->
        </div>
      </div>
    </section>
    
@endsection