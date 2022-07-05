@extends('layouts.scaffold')

@section('content')

    <!-- CONTENT -->
	<div id="contact" class="section">		
		
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-12 col-md-4">

						{{-- <div class="widget info-detail">
							<h4 class="section-heading text-black no-after mb-3">
								Download <span class="text-primary">Brochure</span>
							</h4>
							<div class="widget download">
								<ul class="category-nav">
									<li><a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fas fa-file-pdf mr-3"></span> Company Profile</a></li>
									<li><a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fas fa-file-pdf mr-3"></span> Product Knowledge</a></li>
									<li><a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fas fa-file-pdf mr-3"></span> Voluptate Velit</a></li>
								</ul>
							</div>
						</div> --}}

						<div class="widget info-detail">
							<h4 class="section-heading text-black no-after mb-3">
								REACHING OUR <br>OFFICE
								{{-- Project <span class="text-primary">Details</span> --}}
							</h4>
							<ul class="list-info">
								
								<li>
									<div class="info-icon text-black">
										<span class="fas fa-map-marked-alt"></span>
									</div>
									<div class="info-text">P.O Box CS 8590 Tema</div>
								</li>
								<li>
									<div class="info-icon text-black">
										<span class="fas fa-phone-alt"></span>
									</div>
									<div class="info-text">+233 244 725 281
										+233 208 114 935</div>
								</li>
								<li>
									<div class="info-icon text-black">
										<span class="fas fa-globe-americas"></span>
									</div>
									<div class="info-text">jozidacl@gmail.com</div>
								</li>
								{{-- <li>
									<div class="info-icon text-black">
										<span class="fas fa-clock"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li> --}}
							</ul>
						</div>

					</div>

					<div class="col-sm-12 col-md-8 pleft">

						<h4 class="text-black mt-0">Send a Message here</h4>

						<form action="/send" method="post" class="" id="">
							@csrf
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="" name="name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" id="p_email" placeholder="Enter Email" required="" name="email">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_subject" placeholder="Subject" name="subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number" name="phone">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Enter Your Message" name="message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div class="text-left">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary cs-contact-btn">SEND MESSAGE</button>
								</div>
							</div>
						</form>
	
					</div>
					
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
						<div class="tbutton"><a href="#" class="btn btn-secondary">Get a Quote</a></div>
					</div>

				</div>

			</div>
		</div>
	</div>

	@if(Session::has('message'))
<div class="flash_message">
	{{ Session('message')}}
</div>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script>
	$(document).ready(function () {
		
		$('.flash_message').slideDown('slow');


		setTimeout(function () {
			$('.flash_message').slideUp('slow');
		}, 5000);
	});

</script>
@endsection
