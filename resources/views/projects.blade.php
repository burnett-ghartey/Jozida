@extends('layouts.scaffold')
@section('content')

   <!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					@foreach($projects as $project)
					<div class="col-sm-4 col-md-4">
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
					{{-- <div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="images/block-img-7.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">Healthcare</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="images/block-img-3.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">Government</p>
								</div>
							</a>
						</div>	
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="images/block-img-8.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">Infrastructure</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="images/block-img-5.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">Education</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="images/block-img-14.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">Residential</p>
								</div>
							</a>
						</div>
					</div> --}}

				</div>

				
			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section bgi-cover-center bg-overlay-dark" data-background="images/block-img-3.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row align-items-center">
					<div class="col-sm-12 col-md-8 offset-md-2">
						<div class="cta-info">
							<h2 style="color: #fff !important;" class="text-primary ">We take pride in what we do. Look around.</h2>
							<p class="text-white">The enthusiasm that motivates us to improve is based on our core principles. They enable our employees to make the best decisions for our clients and projects, to make a difference via their ideas and hard effort, and to find solutions that produce more predictable results.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- OUR TESTIMONIALS & PARTNERS -->
	{{-- <div class="section">
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