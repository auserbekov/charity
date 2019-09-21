@extends('frontend.layouts.master')


@section('content')

	<div class="hero-wrap" style="background-image: url('images/bg_6.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Failure</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Oops!</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section bg-light">
      	<div class="container">
			<p>Oops. Something went wrong! Please, try again.</p>
      	</div>
    </section>



@endsection