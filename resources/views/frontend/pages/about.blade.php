@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('images/horses.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
         <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">@lang('content.home')</a></span> <span>@lang('content.about')</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.about')</h1>
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
				<h2 class="mb-4">@lang('content.welcome')</h2>
				@lang('content.welcome_text')
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
            <span>@lang('content.saving_animals')</span>
            <strong class="number" data-number="132805">0</strong>
            <span>@lang('content.animals_count', ['count' => 190])</span>
          </div>
        </div>
      </div>
      <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-2 align-items-stretch">
          <div class="text">
            <h3 class="mb-4">@lang('content.donate_money')</h3>
            <p>@lang('content.your_gift')</p>
            <p><a href="#" class="btn btn-white px-3 py-2 mt-2">@lang('content.donate_now')</a></p>
          </div>
        </div>
      </div>
      <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-3 align-items-stretch">
          <div class="text">
            <h3 class="mb-4">@lang('content.be_a_volunteer')</h3>
            <p>@lang('content.become_a_family')</p>
            <p><a href="#" class="btn btn-white px-3 py-2 mt-2">@lang('content.be_a_volunteer')</a></p>
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
        <h2 class="mb-4">@lang('content.organization_details')</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <h3 style="display: block">@lang('content.bank_details')</h3>
        <br>
        <p>
          <strong>@lang('content.charity_name')</strong><br>
          BIN 190940011996<br>
          IBAN KZ9496516F0008989549 (KZ)<br>
          IBAN KZ4896516F0008989601 (USD)<br>
          IBAN KZ3796516F0008989605 (EUR)<br>
          IRTYKZKA, AO Forte Bank<br>
          BANK BIN: 050941000204<br>
        </p>
      </div>
      <div class="col-lg-4">
        <h3>@lang('content.government_license')</h3><br>
        <img class="img-fluid" src="/images/gos_spravka.jpeg">
        <p>&nbsp;</p>
      </div>
      <div class="col-lg-4">
        <h3>@lang('content.contacts')</h3>
        <br>
        <p>
          @lang('content.full_address')<br>
          <br>
          @lang('content.director')
        </p>
      </div>
    </div>
  </div>
</section>

@endsection