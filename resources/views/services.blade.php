@extends('layouts.scaffold')

@section('content')

   <!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
                    @foreach($services as $service)
					<div class="col-sm-4 col-md-4">
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
								<h4 class="text-black mb-2">Construction Consultant</h4>
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
								<h4 class="text-black mb-2">Special Projects</h4>
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
								<h4 class="text-black mb-2">House Renovation</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
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
						</div> --}}
					{{-- </div> --}}

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
							Contracting services<br> done right.
						</h3>
						<p>Jozida Construction offers general contracting, design-build, and construction management services that are tailored to meet our clients' needs.</p>
						{{-- <div class="row no-gutters">
							<div class="col-sm-12 col-md-4 border-box">
								<div class="box-stat-2">
									<h2 class="counter">89</h2>
									<p>Offices Worldwide</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 border-box">
								<div class="box-stat-2">
									<h2 class="counter">89</h2>
									<p>Offices Worldwide</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 border-box">
								<div class="box-stat-2">
									<h2 class="counter">89</h2>
									<p>Offices Worldwide</p>
								</div>
							</div>
						</div> --}}
					</div>
					<div class="col-sm-12 col-md-5">
						<img src="images/workerA.jpg" alt="" class="img-fluid img-overlap">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- PARTNERS -->
	{{-- <div class="section">
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