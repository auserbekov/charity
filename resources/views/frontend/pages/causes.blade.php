@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Causes</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Causes</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/causes-horses.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Share your warmth with animals</a></h3>
                  <p>Moving to a new, undeveloped area sounds like a verdict for 70 shorthair, sick and elderly horses. They vitally need a warm room for the winter!</p>
                  <span class="donation-time mb-3 d-block">Last donation 3d ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/causes-healing.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Project HEALING</a></h3>
                  <p>The goal of the program is to provide homeless animals with qualified veterinary care.</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/causes-elephants.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Keep elephants from wildlife traffickers</a></h3>
                  <p>Poachers kill as many as 35,000 elephants each year for their ivory tusks and with the current poaching rates causing an 8 percent population decline each year, this iconic species could be wiped out in our lifetime.</p>
                  <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                  <div class="progress custom-progress-success">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
          </div>
        </div>
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