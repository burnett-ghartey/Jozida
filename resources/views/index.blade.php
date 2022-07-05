@extends('layouts.scaffold')


	
@section('content')
	<!-- BANNER -->
    <div id="home" class="banner">
    	<div class="owl-carousel owl-theme full-screen">
    		<!-- Item 1 -->
	    	<div class="item">
	        	<img src="images/master-metal-smiths-metal-structure-pambos-4.jpg" alt="Slider">
	        	<div class="overlay-bg"></div>
	        	<div class="container d-flex align-items-center h-center">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading text-white">JOZIDA CONSTRUCTION LIMITED</h1>
		                {{-- <p class="uk18 text-white">Our professional team works to increase productivity and cost effectiveness on the market</p> --}}
		                <a href="{{ url('/about')}}" class="btn btn-primary">Who We Are</a> 
		                <a href="{{ url('/contact')}}" class="btn btn-secondary">Contact Us</a>
		            </div>   
	            </div>
	    	</div>
	    	<!-- Item 2 -->
			<div class="item">
	            <img style="object-fit: cover" src="images/imageA.JPG" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container d-flex align-items-center h-center">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading text-white">Engineer & Build</h1>
		                <p class="uk18 text-white">Your Choice is Simple.</p>
		                {{-- <a href="#" class="btn btn-primary">Who We Are</a>  --}}
		                <a href="/services" class="btn btn-secondary">Our Services</a>
		            </div>  
	            </div>
	        </div> 
	    	
	    	<!-- Item 3 -->
	    	<div class="item">
	            <img src="images/imageB.JPG" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container d-flex align-items-center h-left">
	            	<div class="wrap-caption">
		                <h1 class="caption-heading text-white">Engineer & Build</h1>
		                <p class="uk18 text-white">We will deal with your failure that determines how you achieve success.</p>
		                <a href="{{ url('/contact') }}" class="btn btn-primary">Get Free Quote</a> 
		                <a href="{{ url('/about')}}" class="btn btn-secondary">Learn more</a>
		            </div>    
	            </div>
	        </div> 
    	</div>
	    <div class="custom-nav owl-nav"></div>
    </div>	

    <!-- WHY -->
	{{-- <div class="section bg-primary">
		<div class="content-wrap pt-0">
			<div class="container">
				
				<div class="row overlap-row">
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="box-image-3 text-black">
							<div class="media-img">
								<img src="images/block-img-8.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-content cs-body-style">
								<h4>We've Repution for Excellence</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a> 
							</div>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="box-image-3 text-black">
							<div class="media-img">
								<img src="images/block-img-2.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-content cs-body-style">
								<h4>We Build Partnerships</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a> 
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="box-image-3 text-black">
							<div class="media-img">
								<img src="images/block-img-4.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-content cs-body-style">
								<h4>Guided by Commitment</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a> 
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="box-image-3 text-black">
							<div class="media-img">
								<img src="images/block-img-4.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-content cs-body-style">
								<h4>A Team of Professionals</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- ABOUT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-4 col-md-4">
						<h4 class="section-heading text-black no-after mb-3">
							About <span class="text-primary">Us</span>
						</h4>
						<h3 class="text-black">
							We deliver landmark projects
						</h3>
						<p>JOZIDA CONSTRUCTION is one of Ghana’s leading privately owned construction companies specialized
							in Road Works, Welding and Fabrications, Gas and Liquid Pipelines Construction and
							General Civil Works.</p>
						<a href="{{ url('/projects')}}" class="btn btn-secondary">Our Projects</a>
						<div class="spacer-30"></div>
					</div>
					<div class="col-sm-8 col-md-8 pleft">
						<div class="img-subsco">
							<img src="images/imageA.JPG" alt="" class="img-fluid">
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>

	<!-- SERVICES -->
	<div class="section bg-gray-light">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h4 class="section-heading text-center text-black no-after mb-5">
							Our <span class="text-primary">Services</span>
						</h4>
					</div>
				</div>

				<div class="row">
					@foreach($services as $service)
					<div class="col-sm-4 col-md-4 col-lg-6">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<img src="images/services/{{$service->photo->filename}}" class="img-fluid">
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">{{$service->title}}</h4>
								<p>{{$service->description}}</p>
								{{-- <a href="#">Read more</a> --}}
							</div>
						</div>
					</div>
					@endforeach

					{{-- <div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-comments"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">We Build Partnerships</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-cube"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">Guided by Commitment</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-home"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">A Team of Professionals</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div> --}}

					{{-- <div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-brush"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">Tiling And Paintings</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-window-restore"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">Laminate Flooring</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div> --}}

				</div>

				
			</div>
		</div>
	</div>		

	<!-- WORKS -->
	<div class="section">
		<div class="content-wrap">
			<div class="container-fluid">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h4 class="section-heading text-center text-black no-after mb-5">
							Featured <span class="text-primary">Projects</span>
						</h4>
					</div>
				</div>

				<div class="row">

					<div class="col-sm-12 col-md-12">

						<div id="carousel-project" class="owl-carousel owl-theme owl-dark">
				    		<!-- Item 1 -->
							@foreach($projects as $project)
					    	<div class="item">
								<div class="box-image-1">
									<a title="Industrial Complex">
										<div class="media-img">
											<img src="images/projects/{{$project->photo->filename}}" alt="" class="img-fluid">
										</div>
										<div class="body-content">
											{{-- <h4 class="title">Commercial Building</h4> --}}
											<p class="category">{{$project->category}}</p>
										</div>
									</a>
								</div>
					    	</div>
							@endforeach

					    	<!-- Item 2 -->
					    	{{-- <div class="item">
								<div class="box-image-1">
									<a href="project-detail.html" title="Industrial Complex">
										<div class="media-img">
											<img src="images/block-img-7.jpg" alt="" class="img-fluid">
										</div>
										<div class="body-content">
											<h4 class="title">Commercial Building</h4>
											<p class="category">building, design</p>
										</div>
									</a>
								</div>
					    	</div><!-- Item 3 -->
					    	<div class="item">
								<div class="box-image-1">
									<a href="project-detail.html" title="Industrial Complex">
										<div class="media-img">
											<img src="images/block-img-3.jpg" alt="" class="img-fluid">
										</div>
										<div class="body-content">
											<h4 class="title">Commercial Building</h4>
											<p class="category">building, design</p>
										</div>
									</a>
								</div>
					    	</div><!-- Item 4 -->
					    	<div class="item">
								<div class="box-image-1">
									<a href="project-detail.html" title="Industrial Complex">
										<div class="media-img">
											<img src="images/block-img-8.jpg" alt="" class="img-fluid">
										</div>
										<div class="body-content">
											<h4 class="title">Commercial Building</h4>
											<p class="category">building, design</p>
										</div>
									</a>
								</div>
					    	</div><!-- Item 5 -->
					    	<div class="item">
								<div class="box-image-1">
									<a href="project-detail.html" title="Industrial Complex">
										<div class="media-img">
											<img src="images/block-img-5.jpg" alt="" class="img-fluid">
										</div>
										<div class="body-content">
											<h4 class="title">Commercial Building</h4>
											<p class="category">building, design</p>
										</div>
									</a>
								</div>
					    	</div><!-- Item 6 -->
					    	<div class="item">
								<div class="box-image-1">
									<a href="project-detail.html" title="Industrial Complex">
										<div class="media-img">
											<img src="images/block-img-14.jpg" alt="" class="img-fluid">
										</div>
										<div class="body-content">
											<h4 class="title">Commercial Building</h4>
											<p class="category">building, design</p>
										</div>
									</a>
								</div>
					    	</div> --}}

					    </div>

					</div>

					

				</div>

				
			</div>
		</div>
	</div>	

	<!-- CTA -->
	{{-- <div class="section bgi-cover-center bg-overlay-dark" data-background="images/hero-7.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row align-items-center">
					<div class="col-sm-12 col-md-8 offset-md-2">
						<div class="cta-info">
							<h2 class="text-primary">Quality Construction. Honest service. Great value</h2>
							<p class="text-white">Our professional team works to increase productivity and cost effectiveness on the market</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div> --}}
	<div class="section bg-primary">
		<div class="content-wrap pt-0">
			<div class="container">
				<div class="row text-center cs-what-we-do">
					<div class="col-12">
					  <h4 class="section-title">We Are Specialists In What We Do</h4>
					  {{-- <h3 class="section-sub-title"></h3> --}}
					</div>
				</div>
				<div class="row overlap-row">
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-12 col-lg-3">
						<div class="box-image-3 text-black">
							<div class="media-img cs-icon-box">
								<i class="fas fa-trophy cs-icon"></i>
							</div>
							<div class="body-content cs-body-style">
								<h4>We've Repution for Excellence</h4>
								{{-- <p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>  --}}
							</div>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-12 col-md-12 col-lg-3">
						<div class="box-image-3 text-black">
							<div class="media-img cs-icon-box">
								<i class="fas fa-sliders-h cs-icon"></i>
							</div>
							<div class="body-content cs-body-style">
								<h4>We Build Partnerships</h4>
								{{-- <p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>  --}}
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-sm-12 col-md-12 col-lg-3">
						<div class="box-image-3 text-black">
							<div class="media-img cs-icon-box">
								<i class="fas fa-thumbs-up cs-icon"></i>
							</div>
							<div class="body-content cs-body-style">
								<h4>Guided by Commitment</h4>
								{{-- <p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>  --}}
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-3">
						<div class="box-image-3 text-black">
							<div class="media-img cs-icon-box">
								<i class="fas fa-users cs-icon"></i>
							</div>
							<div class="body-content cs-body-style">
								<h4>A Team of Professionals</h4>
								{{-- <p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>  --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- OUR TESTIMONIALS & PARTNERS -->
	{{-- <div class="section bg-gray-light">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-6 col-md-6">
						<h4 class="section-heading text-left text-black no-after mb-5">
							Our <span class="text-primary">Testimony</span>
						</h4>
						<div id="testimonial" class="owl-carousel owl-theme owl-dark">
							<!-- Item 1 -->
							<div class="item">
								<div class="rs-testimonial-1">
								   	<div class="media">
								   		<img src="images/testimony-1.jpg" alt="" class="rounded-circle">
								   	</div>
								   	<div class="body">
								      	<p>"Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit"</p>
								   	</div>
							      	<h5 class="name">John Doel</h5>
							      	<div class="company">Graphicriver</div>
								</div>
							</div>

							<!-- Item 2 -->
							<div class="item">
								<div class="rs-testimonial-1">
									<div class="media">
								   		<img src="images/testimony-2.jpg" alt="" class="rounded-circle">
								   	</div>
								   	<div class="body">
								      	<p>"Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit"</p>
								   	</div>
							      	<h5 class="name">John Doel</h5>
							      	<div class="company">Graphicriver</div>
								</div>
							</div>

							<!-- Item 3 -->
							<div class="item">
								<div class="rs-testimonial-1">
									<div class="media">
								   		<img src="images/testimony-3.jpg" alt="" class="rounded-circle">
								   	</div>
								   	<div class="body">
								      	<p>"Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit"</p>
								   	</div>
							      	<h5 class="name">John Doel</h5>
							      	<div class="company">Graphicriver</div>
								</div>
							</div>

							<!-- Item 4 -->
							<div class="item">
								<div class="rs-testimonial-1">
									<div class="media">
								   		<img src="images/testimony-1.jpg" alt="" class="rounded-circle">
								   	</div>
								   	<div class="body">
								      	<p>"Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit"</p>
								   	</div>
							      	<h5 class="name">John Doel</h5>
							      	<div class="company">Graphicriver</div>
								</div>
							</div>

						</div>
						<div class="spacer-30"></div>
					</div>

					<div class="col-sm-6 col-md-6 pleft">
						<h4 class="section-heading text-left text-black no-after mb-5">
							Our <span class="text-primary">Clients</span>
						</h4>
						<div class="row align-items-center">
							<div class="col-md-4 border-box">
								<img src="images/dummy-logo-1b.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 border-box">
								<img src="images/dummy-logo-2b.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 border-box">
								<img src="images/dummy-logo-3b.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 border-box">
								<img src="images/dummy-logo-4b.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 border-box">
								<img src="images/dummy-logo-5b.png" alt="" class="img-fluid">
							</div>
							<div class="col-md-4 border-box">
								<img src="images/dummy-logo-6b.png" alt="" class="img-fluid">
							</div>
						</div>
						<p class="uk21 text-black mt-4"><strong>Trusted by over 9.000 companies worldwide</strong></p>	
					</div>

				</div>
				
			</div>
		</div>
	</div>
	 --}}
	
	<!-- NEWS -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h4 class="section-heading text-center text-black no-after mb-5">
							Our <span class="text-primary">News</span>
						</h4>
					</div>
				</div>

				<div class="row mt-4">
					
					<!-- Item 1 -->
					@foreach($latests as $latest)
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-1">
							<div class="media">
								<a href="{{ url('/news/'.$latest->slug)}}">
									<img src="images/articles/{{$latest->photo->filename}}" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="post-meta">
									<span class="post-author">{{ $latest->created_at->diffForHumans() }}</span>
									{{-- <span class="post-comments">No Comments</span> --}}
								</div>
								<div class="title"><a href="{{url('/news/'.$latest->slug)}}">{{$latest->headline}}</a></div>
								
								<p>{{Str::limit(strip_tags($latest->description), 90)}}</p>
								<a href="{{ url('/news/'.$latest->slug)}}">Read More</a>
							</div>
						</div>
					</div>
					@endforeach

					<!-- Item 2 -->
					{{-- <div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-1">
							<div class="media">
								<a href="news-single.html">
									<img src="images/block-img-6.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="post-meta">
									<span class="post-author">August 13, 2020</span>
									<span class="post-comments">No Comments</span>
								</div>
								<div class="title"><a href="news-single.html">Deleniti atque corrupti</a></div>
								
								<p>Dignissimos ccusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores....</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-1">
							<div class="media">
								<a href="news-single.html">
									<img src="images/block-img-5.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="post-meta">
									<span class="post-author">August 13, 2020</span>
									<span class="post-comments">No Comments</span>
								</div>
								<div class="title"><a href="news-single.html">Voluptatum deleniti atque</a></div>
								
								<p>Dignissimos ccusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores....</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div> --}}

				</div>

			</div>
		</div>
	</div>

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

	
	