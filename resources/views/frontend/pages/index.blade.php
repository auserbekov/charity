@extends('frontend.layouts.master')


@section('content')

<div class="hero-wrap" style="background-image: url('{{ asset('images/bg_main.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Protecting & saving most threatened species</h1>
        <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p> -->

        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
          <a href="/donate" class="btn btn-warning btn-outline-white px-4 py-3 popup-vimeo">Donate</a>
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
		<div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">Make Donation</h3>
            <p>Donate some money and help protecting and saving animals all over the world.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">Become A Volunteer</h3>
            <p>We are big family. We have a great mission. Join us and make a difference.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 d-flex services p-3 py-4 d-block">
          <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
          <div class="media-body pl-4">
            <h3 class="heading">Sponsorship</h3>
            <p>We are looking for sponsors for our projects and causes.</p>
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
        <h2 class="mb-4">Our Projects</h2>
        <p>You have the power to save World's Wildlife. It takes just a couple of minutes to support a project.</p>
      </div>
    </div>
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="carousel-cause owl-carousel">
    				<div class="item">
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
    				<div class="item">
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
    				<div class="item">
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

<section class="ftco-gallery">
	<div class="d-md-flex">
    	<a href="images/cause-2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-2.jpg);">
    		<div class="icon d-flex justify-content-center align-items-center">
    			<span class="icon-search"></span>
    		</div>
    	</a>
    	<a href="images/cause-3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-3.jpg);">
    		<div class="icon d-flex justify-content-center align-items-center">
    			<span class="icon-search"></span>
    		</div>
    	</a>
    	<a href="images/cause-4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-4.jpg);">
    		<div class="icon d-flex justify-content-center align-items-center">
    			<span class="icon-search"></span>
    		</div>
    	</a>
    	<a href="images/cause-5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-5.jpg);">
    		<div class="icon d-flex justify-content-center align-items-center">
    			<span class="icon-search"></span>
    		</div>
    	</a>
	</div>
	<div class="d-md-flex">
    	<a href="images/cause-6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause-6.jpg);">
    		<div class="icon d-flex justify-content-center align-items-center">
    			<span class="icon-search"></span>
    		</div>
    	</a>
    	<a href="images/image_3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_3.jpg);">
    		<div class="icon d-flex justify-content-center align-items-center">
    			<span class="icon-search"></span>
    		</div>
    	</a>
    	<a href="images/image_1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_1.jpg);">
    		<div class="icon d-flex justify-content-center align-items-center">
    			<span class="icon-search"></span>
    		</div>
    	</a>
    	<a href="images/image_2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/image_2.jpg);">
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
        <h2 class="mb-4">Recent from blog</h2>
        <p>News, interesting fact, captivating stories and much more in Animal World.</p>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
      	<div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/news-1.jpg');">
          </a>
          <div class="text p-4 d-block">
          	<div class="meta mb-3">
              <div><a href="#">Sept 20, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">Most Humane Country</a></h3>
            <p>Luxembourg may become the most humane country with respect to animals in the world.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
      	<div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/dog-2.jpg');">
          </a>
          <div class="text p-4 d-block">
          	<div class="meta mb-3">
              <div><a href="#">Sept 18, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">Dog knows your face!</a></h3>
            <p>Scientists: Dogs can distinguish faces no worse than humans.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
      	<div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/dog-3.jpg');">
          </a>
          <div class="text p-4 d-block">
          	<div class="meta mb-3">
              <div><a href="#">Sept 11, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-3"><a href="#">Dogtectives</a></h3>
            <p>Scientists: Dogs distinguish between good and evil faces</p>
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
        <h2 class="mb-4">Our Latest Events</h2>
      </div>
    </div>
    <div class="row">
    	<div class="col-md-4 d-flex ftco-animate">
      	<div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/event-1.jpg');">
          </a>
          <div class="text p-4 d-block">
          	<div class="meta mb-3">
              <div><a href="#">Oct. 4, 2019</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mb-4"><a href="#">World Animal Day</a></h3>
            <p class="time-loc">
              <!-- <span class="mr-2">
                <i class="icon-clock-o"></i> 10:30AM-03:30PM
              </span> 
              <span>
                <i class="icon-map-o"></i> Venue Main Campus
              </span> -->
            </p>
            <p>World Animal Day is a social movement charged with the Mission of raising the status of animals in order to improve welfare standards around the globe</p>
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