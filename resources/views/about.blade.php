@extends('layouts.scaffold')
   <!-- ABOUT -->
   @section('content')
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-8 col-md-8 pright">
						<div class="img-subsco">
							{{-- <div class="icon-play-yt">
								<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube"><i class="fas fa-play-circle"></i></a>
							</div> --}}
							<img src="images/Picture 122.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<h4 class="section-heading text-black no-after mb-3">
							About <span class="text-primary">Us</span>
						</h4>
						<h3 class="text-black">
							We deliver landmark projects
						</h3>
						<p>JOZIDA CONSTRUCTION is one of Ghana’s leading privately owned construction companies specialized in Road Works, Welding and Fabrications, Gas and Liquid Pipelines Construction and General Civil Works.</p>
						<a href="/projects" class="btn btn-secondary">Our Projects</a>
						<div class="spacer-30"></div>
					</div>
					
				</div>

				
			</div>
		</div>
	</div>

	<!-- SERVICES -->
	<div class="section">
		<div class="content-wrap pt-0">
			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12">

						<div id="carousel-services" class="owl-carousel owl-theme owl-dark">
				    		<!-- Item 1 -->
							@foreach($services as $service)
					    	<div class="item">
								<div class="rs-icon-info-1">
									<div class="info-icon">
										<img src="/images/services/{{$service->photo->filename}}" class="img-fluid cs-img-fluid">
									</div>
									<div class="info-text">
										<h4 class="text-black mb-2">{{$service->title}}</h4>
										<p>{{$service->description}}</p>
										{{-- <a href="#">Read more</a> --}}
									</div>
								</div>
					    	</div>
							@endforeach

					    	<!-- Item 2 -->
					    	{{-- <div class="rs-icon-info-1">
								<div class="info-icon">
									<i class="fas fa-comments"></i>
								</div>
								<div class="info-text">
									<h4 class="text-black mb-2">Construction Consultant</h4>
									<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your.</p>
									<a href="#">Read more</a>
								</div>
							</div>
					    	<!-- Item 3 -->
					    	<div class="rs-icon-info-1">
								<div class="info-icon">
									<i class="fas fa-cube"></i>
								</div>
								<div class="info-text">
									<h4 class="text-black mb-2">Special Projects</h4>
									<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your.</p>
									<a href="#">Read more</a>
								</div>
							</div>

					    	<!-- Item 4 -->
					    	<div class="rs-icon-info-1">
								<div class="info-icon">
									<i class="fas fa-home"></i>
								</div>
								<div class="info-text">
									<h4 class="text-black mb-2">House Renovation</h4>
									<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your.</p>
									<a href="#">Read more</a>
								</div>
							</div>
					    	
					    	<!-- Item 5 -->
					    	<div class="rs-icon-info-1">
								<div class="info-icon">
									<i class="fas fa-brush"></i>
								</div>
								<div class="info-text">
									<h4 class="text-black mb-2">Tiling And Paintings</h4>
									<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your.</p>
									<a href="#">Read more</a>
								</div>
							</div>
					    	
					    	<!-- Item 6 -->
					    	<div class="rs-icon-info-1">
								<div class="info-icon">
									<i class="fas fa-window-restore"></i>
								</div>
								<div class="info-text">
									<h4 class="text-black mb-2">Laminate Flooring</h4>
									<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your.</p>
									<a href="#">Read more</a>
								</div>
							</div> --}}

					    </div>

					</div>

					

				</div>

				
			</div>
		</div>
	</div>	

	<!-- STATS -->
	<div class="section bgi-cover-center bg-overlay-light" data-background="images/block-img-15.jpg">
		<div class="content-wrap pb-0">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-7">
						<h3 class="text-black">
							Construction of high quality. Honest service. Great value
						</h3>
						<p>Our experienced team strives to improve market productivity and cost effectiveness.</p>
						<div class="row no-gutters">
							<div class="col-sm-12 col-md-4 border-box">
								<div class="box-stat-2">
									<h2 class="counter">1789</h2>
									<p>Total Projects</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 border-box">
								<div class="box-stat-2">
									<h2 class="counter">647</h2>
									<p>Staff Members</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 border-box">
								<div class="box-stat-2">
									<h2 class="counter">4000</h2>
									<p>Hours of Work</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 border-box">
								<div class="box-stat-2">
									<h2 class="counter">44</h2>
									<p>Countries Experience</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-5">
						<img src="{{ asset('images/workerA.jpg')}}" alt="" class="img-fluid img-overlap">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- TEAM -->
	{{-- <div class="section">
		<div class="content-wrap pb-0">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h4 class="section-heading text-center text-black no-after mb-5">
							Our <span class="text-primary">Team</span>
						</h4>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4">

						<div class="rs-team-1 mb-5">
							<div class="media">
								<img src="images/rect-img-1.jpg" alt="" class="img-fluid">
							</div>
							<div class="body">
								<div class="title">Robert Albert</div>
								<div class="position">CEO /Founder</div>
								<p>The Best in dolor sit amet consectetur adipisicing elit sed simply dummy text of the printing and typesetting</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-sm-6 col-md-4">

						<div class="rs-team-1 mb-5">
							<div class="media">
								<img src="images/rect-img-2.jpg" alt="" class="img-fluid">
							</div>
							<div class="body">
								<div class="title">Rudhi Sasmito</div>
								<div class="position">CTO</div>
								<p>The Best in dolor sit amet consectetur adipisicing elit sed simply dummy text of the printing and typesetting</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-sm-6 col-md-4">

						<div class="rs-team-1 mb-5">
							<div class="media">
								<img src="images/rect-img-3.jpg" alt="" class="img-fluid">
							</div>
							<div class="body">
								<div class="title">Ardi Doe</div>
								<div class="position">Techical</div>
								<p>The Best in dolor sit amet consectetur adipisicing elit sed simply dummy text of the printing and typesetting</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-sm-6 col-md-4">

						<div class="rs-team-1 mb-5">
							<div class="media">
								<img src="images/rect-img-4.jpg" alt="" class="img-fluid">
							</div>
							<div class="body">
								<div class="title">Jason Doe</div>
								<div class="position">Mandor Bangunan</div>
								<p>The Best in dolor sit amet consectetur adipisicing elit sed simply dummy text of the printing and typesetting</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-sm-6 col-md-4">

						<div class="rs-team-1 mb-5">
							<div class="media">
								<img src="images/rect-img-5.jpg" alt="" class="img-fluid">
							</div>
							<div class="body">
								<div class="title">Cak Lento</div>
								<div class="position">Kuli Batu</div>
								<p>The Best in dolor sit amet consectetur adipisicing elit sed simply dummy text of the printing and typesetting</p>
							</div>
						</div>

					</div>

					<div class="col-12 col-sm-6 col-md-4">

						<div class="rs-team-1 mb-5">
							<div class="media">
								<img src="images/rect-img-6.jpg" alt="" class="img-fluid">
							</div>
							<div class="body">
								<div class="title">Anastasia Doe</div>
								<div class="position">Kuli Batu</div>
								<p>The Best in dolor sit amet consectetur adipisicing elit sed simply dummy text of the printing and typesetting</p>
							</div>
						</div>

					</div>

				</div>

				
			</div>
		</div>
	</div>


	<!-- PARTNERS -->
	<div class="section">
		<div class="content-wrap py-5">
			<div class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12">
						<div id="carousel_partners" class="owl-carousel owl-theme">
							<img src="images/dummy-logo-1b.png" alt="">
							<img src="images/dummy-logo-2b.png" alt="">
							<img src="images/dummy-logo-3b.png" alt="">
							<img src="images/dummy-logo-4b.png" alt="">
							<img src="images/dummy-logo-5b.png" alt="">
							<img src="images/dummy-logo-6b.png" alt="">
						</div>
					</div>

				</div>

			</div>
		</div>
	</div> --}}

	<!-- CTA -->
	<div class="section bg-primary">
		<div class="content-wrap py-5">
			<div class="container">

				<div class="row align-items-center cta-block-1">
					<div class="col-sm-8 col-md-8">
						<h4 class="my-1 text-black cs-before-footer">Don't hesitate to contact us any time</h4>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="tbutton"><a href="/contact" class="btn btn-secondary">Get a Quote</a></div>
					</div>

				</div>

			</div>
		</div>
	</div>

	@endsection
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
 jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });


	</script>