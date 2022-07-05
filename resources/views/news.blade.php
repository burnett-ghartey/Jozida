@extends('layouts.scaffold')

@section('content')

   <!-- ABOUT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					@if($latests)
					@foreach($latests as $latest)
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-5">
							<div class="media">
								<a href="{{ url('/news/'.$latest->slug)}}">
									<img src="/images/articles/{{$latest->photo->filename}}" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="post-meta">
									<span class="post-author">{{ $latest->created_at->diffForHumans() }}</span>
									{{-- <span class="post-comments">No Comments</span> --}}
								</div>
								<div class="title"><a href="{{ url('/news/'.$latest->slug)}}">{{$latest->headline}}</a></div>
								
								<p>{{Str::limit(strip_tags($latest->description), 90)}}</p>
								<a href="{{ url('/news/'.$latest->slug)}}">Read More</a>
							</div>
						</div>
					</div>
					@endforeach
					@endif

				
					{{-- <!-- Item 2 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-5">
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
						<div class="rs-news-1 mb-5">
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
					</div>

					<!-- Item 4 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-5">
							<div class="media">
								<a href="news-single.html">
									<img src="images/block-img-4.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="post-meta">
									<span class="post-author">August 13, 2020</span>
									<span class="post-comments">No Comments</span>
								</div>
								<div class="title"><a href="news-single.html">Occusamus et iusto odio</a></div>
								
								<p>Dignissimos ccusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores....</p>
								<a href="#">Read More</a>
							</div>
						</div>
					</div>

					<!-- Item 5 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-5">
							<div class="media">
								<a href="news-single.html">
									<img src="images/block-img-3.jpg" alt="" class="img-fluid">
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

					<!-- Item 6 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-news-1 mb-5">
							<div class="media">
								<a href="news-single.html">
									<img src="images/block-img-2.jpg" alt="" class="img-fluid">
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

				@if($latests->isEmpty())

				<div class="row-fluid">
				
					<div class="span12 text-center">
				
					No articles available
				
					</div>
				
				</div>
				@endif

				<div class="row mt-5">
					<div class="col-sm-12 col-md-12">
						
						<nav aria-label="Page navigation">
							{{ $latests->links('pagination::bootstrap-4')}}
						  {{-- <ul class="pagination">
						    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
						    <li class="page-item active"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item"><a class="page-link" href="#">Next</a></li>
						  </ul> --}}
						</nav>

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
						<div class="tbutton"><a href="/contact" class="btn btn-secondary">Get a Quote</a></div>
					</div>

				</div>

			</div>
		</div>
	</div>

	
@endsection