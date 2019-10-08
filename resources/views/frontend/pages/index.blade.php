@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('images/horses.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@lang('content.slugline')</h1>
        <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p> -->

        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
          <a href="/donate" class="btn btn-warning btn-outline-white px-4 py-3 popup-vimeo">@lang('content.donate')</a>
        </p>
      </div>
    </div>
  </div>
</div>

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
          	<p><a href="/donate" class="btn btn-white px-3 py-2 mt-2">@lang('content.donate_now')</a></p>
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
		<div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">@lang('content.make_donation')</h3>
            <p>@lang('content.make_donation_text')</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">@lang('content.become_a_volunteer')</h3>
            <p>@lang('content.become_a_volunteer_text')</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">@lang('content.sponsorship')</h3>
            <p>@lang('content.sponsorship_text')</p>
          </div>
        </div>    
      </div>
    </div>
	</div>
</section>


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

<section class="ftco-section">
  <div class="container">
  	<div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">@lang('content.last_donations')</h2>
        <p>@lang('content.last_donations_text')</p>
      </div>
    </div>
    <div class="row">
    	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
    		<div class="staff">
    			<div class="d-flex mb-4">
    				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
    				<div class="info ml-4">
    					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
    					<span class="position">@lang('content.donated') just now</span>
    					<div class="text">
	        				<p>@lang('content.donated') <span>$300</span></p>
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
    					<span class="position">@lang('content.donated') 1 day ago</span>
    					<div class="text">
	        				<p>@lang('content.donated') <span>$150</span></p>
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
    					<span class="position">@lang('content.donated') 1 week ago</span>
    					<div class="text">
	        				<p>@lang('content.donated') <span>$250</span></p>
	        			</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
</section>

<section class="ftco-gallery">
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
</section>

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

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">@lang('content.our_latest_events')</h2>
      </div>
    </div>
    <div class="row">
    	<div class="col-md-4 d-flex ftco-animate">
      	<div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
          </a>
          <div class="text p-4 d-block">
          	<div class="meta mb-3">
              <div><a href="#">@lang('content.oct') 4, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">@lang('content.world_animal_day')</a></h3>
            <p class="time-loc">
              <!-- <span class="mr-2">
                <i class="icon-clock-o"></i> 10:30AM-03:30PM
              </span> 
              <span>
                <i class="icon-map-o"></i> Venue Main Campus
              </span> -->
            </p>
            <p>@lang('content.world_animal_day_text')</p>
            <p><!-- <a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a> --></p>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-4 d-flex ftco-animate">
      	<div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/event-2.jpg');">
          </a>
          <div class="text p-4 d-block">
          	<div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
      	<div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/event-3.jpg');">
          </a>
          <div class="text p-4 d-block">
          	<div class="meta mb-3">
              <div><a href="#">Sep. 10, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="/donate">World Wide Donation</a></h3>
            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
          </div>
        </div>
      </div> -->
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