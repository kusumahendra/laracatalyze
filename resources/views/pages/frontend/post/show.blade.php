@extends('layout.frontend.master')

@section('title')
@endsection

@section('content')
<section id="post-container">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell large-8 medium-10 small-12">
				<nav aria-label="You are here:" role="navigation">
				  <ul class="breadcrumbs">
				    <li><a href="#">Blog</a></li>
				    <li><a href="#">{{ $post->category->name }}</a></li>
				  </ul>
				</nav>

				<h1>{{ $post->title }}</h1>

				<nav aria-label="You are here:" role="navigation">
				  <ul class="breadcrumbs">
				    <li><a href="#">{{ $post->user->name }}</a></li>
				    <li><a href="#">{{ Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</a></li>
				    <li><a href="#">{{ $post->user->company }}</a></li>
				  </ul>
				</nav>
				<div class="tags">
					<p>
						<span class="tag title">Topics</span>
						@foreach ($post->tags as $tag)
							<a href="#" class="tag">{{ $tag->name }}</a>
						@endforeach
					</p>
				</div>
				<div class="excerpt">
					<p class="lead">{{ $post->excerpt }}</p>
				</div>
				<div class="content">
					{!! $post->content !!}
				</div>
				<div class="share">
					<p><span class="text">Share on</span>
						<a class="share-button facebook">
							<i class="fa fa-facebook fa-fw fa-lg"></i>
						</a>
						<a class="share-button twitter">
							<i class="fa fa-twitter fa-fw fa-lg"></i>
						</a>
						<a class="share-button gplus">
							<i class="fa fa-google fa-fw fa-lg"></i>
						</a>
						<a class="share-button email">
							<i class="fa fa-envelope fa-fw fa-lg"></i>
						</a>
						<a class="share-button rss">
							<i class="fa fa-rss fa-fw fa-lg"></i>
						</a>
					</p>
				</div>
				<div class="grid-x grid-padding-x author">
					<div class="cell shrink profile-picture">
						<img src="https://placeimg.com/480/480/people" alt="">
					</div>
					<div class="cell auto">
						<p>
							<span class="name">{{ $post->user->name }}</span><br>
							<span class="position">{{ $post->user->position }}</span>, <span class="company">{{ $post->user->company }}</span>
						</p>
						<p class="description">
							{{ $post->user->description }}
						</p>
					</div>
				</div>
				<div class="">
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@push('header-scripts')
@endpush