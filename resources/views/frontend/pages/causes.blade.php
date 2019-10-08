@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
         <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">@lang('content.home')</a></span> <span>@lang('content.causes')</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.causes')</h1>
      </div>
    </div>
  </div>
</div>

    
<section class="ftco-section bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-5 heading-section ftco-animate text-center">
        <h2 class="mb-4">@lang('content.our_projects')</h2>
        <p>@lang('content.our_projects_text')</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="carousel-cause owl-carousel">
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/causes-horses.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">@lang('content.share_warmth')</a></h3>
                  <p>@lang('content.share_warmth_text')</p>
                  <span class="donation-time mb-3 d-block">@lang('content.last_donation', ['time' => '3d'])</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/causes-elephants.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">@lang('content.project_elephant')</a></h3>
                  <p>@lang('content.project_elephant_text')</p>
                  <span class="donation-time mb-3 d-block">@lang('content.last_donation', ['time' => '1w'])</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/causes-healing.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">@lang('content.project_healing')</a></h3>
                  <p>@lang('content.project_healing_text')</p>
                  <span class="donation-time mb-3 d-block">@lang('content.last_donation', ['time' => '2w'])</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
            </div>
        </div>
      </div>
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
      <h3 class="mb-3">@lang('content.be_a_volunteer')</h3>
      <form action="#" class="volunter-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="@lang('content.your_name')">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="@lang('content.your_email')">
        </div>
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="@lang('content.content')"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="@lang('content.submit')" class="btn btn-white py-3 px-5">
        </div>
      </form>
    </div>          
    </div>
  </div>
</section>
    
@endsection