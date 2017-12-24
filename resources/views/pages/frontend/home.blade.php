@extends('layout.frontend.master')

@section('title')
@endsection

@section('content')
<section id="home-container">
	<div class="grid-container hide-for-small-only">
		<div class="grid-x cell">
			<ul class="menu align-center menu-secondary">
			  <li><a href="#">RSPO</a></li>
			  <li><a href="#">WWF International</a></li>
			  <li><a href="#">WWF Tigers Alive Initiative</a></li>
			  <li><a href="#">World Resource Institute</a></li>
			  <li><a href="#">The Coral Triangle</a></li>
			</ul>
		</div>
	</div>
	<div class="grid-container-fluid featured-post-grid">
		<div class="grid-x">
			<div class="cell first-column">
				<div class="post" style="background-image: url('{{ substr( $featuredPosts->get(0)->featured_image, 0, 4 ) === 'http' ? $featuredPosts->get(0)->featured_image : asset( $featuredPosts->get(0)->featured_image ) }}')">
					<div class="post-detail-container">
						<div class="post-detail">
							<h3 class="title"><a href="{{ route('frontend.post', $featuredPosts->get(0)->slug) }}">{{ $featuredPosts->get(0)->title }}</a></h3>
							<p class="excerpt">{{ $featuredPosts->get(0)->excerpt }}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="cell second-column">
				<div class="post " style="background-image: url('{{ substr( $featuredPosts->get(1)->featured_image, 0, 4 ) === 'http' ? $featuredPosts->get(1)->featured_image : asset( $featuredPosts->get(1)->featured_image ) }}')">
					<div class="post-detail-container">
						<div class="post-detail">
							<h3 class="title"><a href="{{ route('frontend.post', $featuredPosts->get(1)->slug) }}">{{ $featuredPosts->get(1)->title }}</a></h3>
						</div>
					</div>
				</div>
				<div class="post" style="background-image: url('{{ substr( $featuredPosts->get(2)->featured_image, 0, 4 ) === 'http' ? $featuredPosts->get(2)->featured_image : asset( $featuredPosts->get(2)->featured_image ) }}')">
					<div class="post-detail-container">
						<div class="post-detail">
							<h3 class="title"><a href="{{ route('frontend.post', $featuredPosts->get(2)->slug) }}">{{ $featuredPosts->get(2)->title }}</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="post-grid-container">
		<div class="grid-container post-grid">
			@foreach ($posts->chunk(6) as $chunk)
				<div>
				<div class="grid-x grid-margin-x grid-margin-y">
					@foreach ($chunk as $post)
						<div class="cell medium-6 large-4 ">
							<div class="post">
								<div class="featured-image"
								style="background-image: url('{{ substr( $post->featured_image, 0, 4 ) === 'http' ? $post->featured_image : asset( $post->featured_image ) }}')">
								</div>
								<p class="date">{{ Carbon\Carbon::parse($post->created_at)->format('d M Y')  }}</p>
								<h3 class="title">{{ $post->title }}</h3>
								<div class="hover">
									<p class="date">{{ Carbon\Carbon::parse($post->created_at)->format('d M Y')  }}</p>
									<h3 class="title"><a href="{{ route('frontend.post', $post->slug) }}">{{ $post->title }}</a></h3>
									<p class="excerpt">{{ str_limit($post->excerpt, 150, '...') }}
										<br>
										<a href="{{ route('frontend.post', $post->slug) }}">Read more...</a>
									</p>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				</div>
			@endforeach
		</div>
	</div>
	<div class="client-section">
		<h2 class="text-center">Clients</h2>
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y align-middle">
				<div class="cell small-4 large-2">
					<img src="{{ asset('img/logo-1.png') }}" alt="">
				</div>
				<div class="cell small-4 large-2">
					<img src="{{ asset('img/logo-2.png') }}" alt="">
				</div>
				<div class="cell small-4 large-2">
					<img src="{{ asset('img/logo-3.png') }}" alt="">
				</div>
				<div class="cell small-4 large-2">
					<img src="{{ asset('img/logo-4.png') }}" alt="">
				</div>
				<div class="cell small-4 large-2">
					<img src="{{ asset('img/logo-5.png') }}" alt="">
				</div>
				<div class="cell small-4 large-2">
					<img src="{{ asset('img/logo-6.png') }}" alt="">
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="social-feed">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell medium-4">
					<div class="facebook">
						<div class="facebook-header">
							<h3>Catalyze</h3>
							<p class="likes">6951 Likes</p>
							<a href="" class="button button-hollow">Like <i class="fa fa-facebook"></i></a>
						</div>
					</div>
				</div>
				<div class="cell medium-4">
					<a class="twitter-timeline" href="https://twitter.com/catalyzecomms?ref_src=twsrc%5Etfw" data-height="500" >Tweets by catalyzecomms</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div class="cell medium-4"></div>
			</div>
		</div>
	</div> --}}
	<div class="social-feed">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell medium-4">
					<div class="fb-page" data-href="https://www.facebook.com/WWF/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WWF/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WWF/">WWF</a></blockquote></div>
					{{-- <div class="facebook">
						<div class="facebook-header">
							<h3>Catalyze</h3>
							<p class="likes">6951 Likes</p>
							<a href="" class="button button-hollow">Like <i class="fa fa-facebook"></i></a>
						</div>
					</div> --}}
				</div>
				<div class="cell medium-4">
					<a class="twitter-timeline" href="https://twitter.com/catalyzecomms?ref_src=twsrc%5Etfw" data-height="500" >Tweets by catalyzecomms</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div class="cell medium-4"></div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('header-scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"> --}}
@endpush
@push('footer-scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
<script>
	$(function(){
		$('.post-grid').slick({
		    dots: true,
		    arrow: true,
			infinite: false,
			speed: 500,
			cssEase: 'linear'
		  });
	})
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=561251720640344';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endpush