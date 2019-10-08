@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
         <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">@lang('content.home')</a></span> <span>@lang('content.donate')</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.donate')</h1>
      </div>
    </div>
  </div>
</div>

    
<section class="ftco-section bg-light">
  <div class="container">
    
    <h2>@lang('content.make_donation')</h2>

    <br><br>

    <!-- ROBOKASSA -->
    <script type="text/javascript" src="https://auth.robokassa.kz/Merchant/PaymentForm/FormFLS.js?MerchantLogin=bibarskz&InvoiceID=0&Culture=ru&Encoding=utf-8&Description=Help%20us%20in%20our%20mission&DefaultSum=500&SignatureValue=8a58ea955f64f9872586526c808b70ac"></script>

    <!-- <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div> -->
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



@section('scripts_import')



@endsection