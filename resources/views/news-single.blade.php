@extends('layouts.scaffold')

@section('content')
<div id="class" class="">
	<div class="content-wrap">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-8">
					
					<div class="single-news">
						<div class="media-box">
							<a href="">
								<img src="{{ asset('images/articles/'.$article->photo->filename)}}" alt="" class="img-fluid">
							</a>
						
						</div>
						
						<h2 class="title">{{$article->headline}}</h2>
						<div class="meta mb-4">
							
							<div class="meta-date d-inline"><i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans()}}</div> <div class="meta-author d-inline">Posted by admin </div>
						</div>

						<div>{!! $article->description !!}</div>
					</div>
					<!-- end single blog -->

					{{-- <div class="author-box">
						<div class="media">
							<img src="images/testimony-1.jpg" alt="" class="img-fluid">
						</div>
						<div class="body">
							<h4 class="media-heading"><span>Author :</span>John Doel</h4>
							We are also create and designing template for categories Graphic template and Game asset. in March 2019, we have won big contest Envato most wanted for categories game assets.
						  </div>
						  <div class="clearfix"></div>
					</div> --}}
					<!-- end author box -->

					{{-- <div class="comments-box">
						<h4 class="title-heading">Comments <span>(3)</span></h4>
						
						<div class="media comment">
							<img class="mr-3" alt="64x64" src="images/testimony-2.jpg">
							<div class="media-body">
								<h5 class="media-heading mt-0 mb-1">Susi Doel<small class="date">March 24, 2019</small>
								</h5> 
							  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>
						<div class="media reply-comment">
							<img class="mr-3" alt="64x64" src="images/testimony-3.jpg">
							<div class="media-body">
								<h5 class="media-heading mt-0 mb-1">Susi Doel<small class="date">March 24, 2019</small>
								</h5> 
							  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>
						<div class="media comment">
							<img class="mr-3" alt="64x64" src="images/testimony-1.jpg">
							<div class="media-body">
								<h5 class="media-heading mt-0 mb-1">Susi Doel<small class="date">March 24, 2019</small>
								</h5> 
							  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							</div>
						</div>
						
					</div> --}}
					<!-- end comment -->
{{-- 
					<div class="leave-comment-box">
						<h4 class="title-heading">Leave Comments</h4>
						<form action="#" class="form-comment">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="form-group">
										<input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Name">
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<div class="form-group">
										<input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Email">
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="form-group">
										<input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Website">
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="form-group">
										<textarea id="message" name="message" class="inputtext form-control" rows="6" placeholder="Enter Your Message..."></textarea>
									</div>
								</div>
								<div class="col-xs-12 col-md-12">
									<div class="form-group">
										<button id="send" type="submit" class="btn btn-primary">Post Comment</button>
									</div>
								</div>
							</div>
						</form>
				
					</div> --}}
					<!-- end leave comment -->

					
				</div>

				<div class="col-sm-12 col-md-12 col-lg-4 pleft">
					
					{{-- <div class="widget categories">
						<ul class="category-nav">
							<li class="active"><a href="#" title="Landscape Design">Voluptate Velit</a></li>
							<li><a href="#" title="Planting & Removal">Fugiat Pariatur</a></li>
							<li><a href="#" title="Garden Care">Excepteur Sint</a></li>
							<li><a href="#" title="Irrigation & Drainage">Exercitation</a></li>
							<li><a href="#" title="Stone and Hardscaping">Minim Veniam</a></li>
							<li><a href="#" title="Rubbish Removal">Nulla Pariatur</a></li>
						</ul>
					</div> --}}

					<div class="widget widget-text">
						<div class="widget-title">
							Latest <span>Articles</span>
						</div>
						@foreach($latests as $latest)
						<div class="latest-post-item">
							<div class="meta-date"><span>{{ $latest->created_at->format('d') }}</span>{{ $latest->created_at->format('M') }}</div>
							<div class="title"><a href="{{ url('/news/'.$latest->slug)}}">{{$latest->headline}}</a></div>
							<p class="meta-author">Posted by admin</p>
						</div>
						@endforeach
						{{-- <div class="latest-post-item">
							<div class="meta-date"><span>02</span>Des</div>
							<div class="title"><a href="page-news-single.html">Occaecat cupidatat non proident</a></div>
							<p class="meta-author">Posted by Rome Doel</p>
						</div>
						<div class="latest-post-item">
							<div class="meta-date"><span>14</span>Feb</div>
							<div class="title"><a href="page-news-single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></div>
							<p class="meta-author">Posted by Rome Doel</p>
						</div> --}}

					</div>

					<div class="widget widget-text">
						<div class="widget-title">
							Contact <span>Info</span>
						</div>
						<div class="row mb-3">
							<div class="col-4">Address :</div>
							<div class="col-8">P.O Box CS 8590 Tema</div>
						</div>
						<div class="row mb-3">
							<div class="col-4">Office  :</div>
							<div class="col-8">+233 244 725 281 +233 208 114 935</div>
						</div>
						{{-- <div class="row mb-3">
							<div class="col-4">Fax :</div>
							<div class="col-8">(123) 65412309</div>
						</div> --}}
						<div class="row mb-3">
							<div class="col-4">Email :</div>
							<div class="col-8">jozidacl@gmail.com</div>
						</div>

					</div>

				

				

				

					
					

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
@endsection
	<!-- CONTENT -->
	

