@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
         <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
      </div>
    </div>
  </div>
</div>


<section class="ftco-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 d-flex ftco-animate">
				<div class="img img-about align-self-stretch" style="background-image: url(images/bg_3.jpg); width: 100%;"></div>
			</div>
			<div class="col-md-6 pl-md-5 ftco-animate">
				<h2 class="mb-4">Welcome to Bibars - International Wildlife Charity Organization</h2>
				<p>Bibars is an independent conservation organisation. Our mission is to create a world where people and wildlife can thrive together.</p>
        <p>To achieve our mission, we're finding ways to help transform the future for the world’s wildlife, rivers, forests and seas;</p>
        <p>We’re acting now to make this happen.</p>
        <p>We need your help to support those on the front line dealing with the threats</p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter ftco-intro" id="section-counter">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-1 align-items-stretch">
          <div class="text">
            <span>Saving animals</span>
            <strong class="number" data-number="132805">0</strong>
            <span>Animals in 190 countries in the world</span>
          </div>
        </div>
      </div>
      <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-2 align-items-stretch">
          <div class="text">
            <h3 class="mb-4">Donate Money</h3>
            <p>Your gift doubled to save animals</p>
            <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
          </div>
        </div>
      </div>
      <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-3 align-items-stretch">
          <div class="text">
            <h3 class="mb-4">Be a Volunteer</h3>
            <p>Become a part of our big family</p>
            <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Latest Donations</h2>
        <p>Here we present our donators from all over the world. Thank you!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(images/person_1.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
              <span class="position">Donated just now</span>
              <div class="text">
                  <p>Donated <span>$300</span></p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(images/person_2.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
              <span class="position">Donated 1 day ago</span>
              <div class="text">
                  <p>Donated <span>$150</span></p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        <div class="staff">
          <div class="d-flex mb-4">
            <div class="img" style="background-image: url(images/person_3.jpg);"></div>
            <div class="info ml-4">
              <h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
              <span class="position">Donated 1 week ago</span>
              <div class="text">
                  <p>Donated <span>$250</span></p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection